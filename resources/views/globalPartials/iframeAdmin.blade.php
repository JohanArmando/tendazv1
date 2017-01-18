@if(auth('admins')->check())
    <script type="text/javascript">

        window.onload = function() {

            var iframe = document.createElement('iframe');
            iframe.frameBorder = 0;
            iframe.scrolling = 'no';
            iframe.setAttribute("allowTransparency", "true");
            iframe.id = "store_bar_iframe";
            iframe.src = "{{ url('/iframe/session') }}";
            iframe.style.height = "34px";
            iframe.style.position= 'fixed';
            iframe.style.top= '0';
            iframe.style.right= '0';
            iframe.style.width = '100%';
            iframe.style.zIndex = '99999';
            iframe.innerHTML = '{}';
            iframe.style.left = 'auto';
            var html = document.getElementsByTagName('body')[0];
            html.appendChild(iframe);
            if(getCookie('_bar') == '1'){
                var element = document.getElementById("store_bar_iframe");
                var body = document.getElementsByClassName(".content");
                var bodyID =  document.getElementById("#content");
                element.style.width = '100%';
                element.style.right = 'auto';
                element.style.left = 0;
                if (body && body.length > 0){
                    body.style.marginTop =  '33px';
                }
                if (bodyID && bodyID.length > 0){
                    bodyID.style.marginTop = '33px';
                }
                doShift(true);
            }
            if(getCookie('_bar') == '0'){
                document.body.style.position = 'relative';
                document.documentElement.style.marginTop = "0px";
                var element = document.getElementById("store_bar_iframe");
                element.style.backgroundColor = 'transparent';
                element.style.right = '0px';
                element.style.left = 'auto';
                element.style.width = '32px';
            }
            if(getCookie('_bar') == undefined){
                iframe.width ="100%";
            }
        }
        function getStyle(el,styleProp) {
            var x=el;
            if (x.currentStyle)
                var y = x.currentStyle[styleProp];
            else if (window.getComputedStyle)
                var y = document.defaultView.getComputedStyle(x,null).getPropertyValue(styleProp);
            return y;
        }
        //ESTA FUNCION HACE QUE SUBAN Y BAJEN TODAS LAS ETIQUETAS O HTML DEL DOCUMENTO
        function doShift(down){
            var allElements = document.getElementsByTagName('*');
            for (var i=0; i<allElements.length; i++) {

                if (allElements[i].id != "store_bar_iframe" && getStyle(allElements[i],"position") == "fixed") {
                    allElements[i].style.top = parseInt(getStyle(allElements[i], "top"),10) + (down ? 34 : -34) + "px";
                }
                if(document.getElementById('navbar')){
                    document.getElementById('navbar').style.marginTop = parseInt(getStyle(allElements[i], "top"),10) + (down ? 34 : -0) + "px";
                }
            }
        }
        if (window.addEventListener){
            addEventListener("message", receiveBarMessage, false);
        }
        else {
            window.attachEvent("onmessage", receiveBarMessage)
        }
        //esta fucnion crea una cookie la cual es usada para mirar si el iframe se deja abierto o cerrado
        function setBarCookie(value) {
            var ex=new Date();
            ex.setDate(ex.getDate() + 720);
            document.cookie = "_bar="+value+";expires="+ex.toUTCString()+";path=/";
        }
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i <ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length,c.length);
                }
            }
            return "";
        }
        if(getCookie('_bar') == '1'){
            var element = document.getElementById("store_bar_iframe");
        }
        //esta funcion recibe el mensaje y si el dato es 1 agrande el iframe y bajo todos los datos de lo contaro pone peque�o el iframe
        function receiveBarMessage(event){
            if(event.origin != "{{ url('/') }}") {
                return;
            }
            if(event.data == '1') {
                document.body.style.position = 'relative';
                if(!document.getElementById('navbar')){
                    document.documentElement.style.marginTop = "34px";
                }
                doShift(true);
                var element = document.getElementById("store_bar_iframe");
                element.style.width = '100%';
                element.style.right = 'auto';
                element.style.left = 0;
                setBarCookie('1');
            } else if(event.data == '0') {
                document.body.style.position = 'relative';
                document.documentElement.style.marginTop = "0px";
                doShift(false);
                var element = document.getElementById("store_bar_iframe");
                element.style.backgroundColor = 'transparent';
                element.style.right = '0px';
                element.style.left = 'auto';
                element.style.width = '32px';
                setBarCookie('0');
            }
        }
    </script>
@endif