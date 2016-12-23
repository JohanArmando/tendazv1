myApp.factory("User",["$http","$location","$cookies","$rootScope","Cart",function(t,e,n,a,c){var i={};return i.doLogin=function(a){var i=localStorage.getItem("cart_id")?"/"+localStorage.getItem("cart_id"):"";return t({headers:{Accept:"application/json","Content-Type":"application/json"},url:baseUrl+"/auth/login"+i+"?client_secret="+client_secret+"&client_id="+client_id,method:"POST",data:{email:a.email,password:a.password}}).then(function(t){e.path("/cart"),n.put("auth",JSON.stringify(t.data)),c.setCartId(t.data.cart_id),$("#sign-up").modal("toggle"),location.reload()})["catch"](function(t){$(".bg-danger").removeClass("hidden").text(t.data)})},i.doRegister=function(a){var i=localStorage.getItem("cart_id")?"/"+localStorage.getItem("cart_id"):"";return t({headers:{Accept:"application/json","Content-Type":"application/json"},url:baseUrl+"/auth/register"+i+"?client_secret="+client_secret+"&client_id="+client_id,method:"POST",data:a}).then(function(t){e.path("/cart"),n.put("auth",JSON.stringify(t.data)),c.setCartId(t.data.cart_id),$("#sign-up").modal("toggle"),location.reload()})["catch"](function(t){var e=$(".bg-danger");e.removeClass("hidden"),e.html("<ul></ul>"),angular.forEach(t.data,function(t,n){e.find("ul").append("<li>"+t+"</li>")})})["finally"](function(){})},i.getAuthStatus=function(){var t=n.get("auth");return!!t},i.getUserObject=function(){var t=angular.fromJson(n.get("auth"));return t},i.doUserLogout=function(){n.remove("auth")},i.doEmail=function(n){return t({headers:{Accept:"application/json","Content-Type":"application/json"},url:baseUrl+"/auth/email/"+n+"/"+c.getCartId()+"/?client_secret="+client_secret+"&client_id="+client_id,method:"GET"}).then(function(t){a.carts=t.data.data,e.path("/profile")})["catch"](function(t){})["finally"](function(){})},i.getUserId=function(){return i.getUserObject()?i.getUserObject()._id:c.getItems(c.getCartId()).data.data.customer.data._id},i}]),myApp.factory("Cart",["$http","$rootScope",function(t,e){var n=[];return n.getCartId=function(){return localStorage.getItem("cart_id")},n.setCartId=function(t){localStorage.setItem("cart_id",t)},n.getItems=function(n){return n?t({headers:{Accept:"application/json","Content-Type":"application/json"},url:baseUrl+"/carts/"+n+"/items?client_secret="+client_secret+"&client_id="+client_id,method:"GET"}).then(function(t){e.carts=t.data.data})["catch"](function(t){})["finally"](function(){}):[]},n.deleteItem=function(n,a){return t({headers:{Accept:"application/json","Content-Type":"application/json"},url:baseUrl+"/carts/"+n+"/items/"+a._id+"?client_secret="+client_secret+"&client_id="+client_id,method:"DELETE"}).then(function(t){var n=e.carts.products.data.indexOf(a);e.carts.products.data.splice(n,1)})["catch"](function(t){var n=e.carts.products.data.indexOf(a);e.carts.products.data.splice(n,1)})["finally"](function(){})},n.updateItem=function(n,a){var c={item_id:a._id,quantity:a.quantity};return t({headers:{Accept:"application/json","Content-Type":"application/json"},url:baseUrl+"/carts/"+n+"/items?client_secret="+client_secret+"&client_id="+client_id,method:"POST",data:c}).then(function(t){e.carts=t.data.data})["catch"](function(t){e.carts=t.data.data,$(".updateItem").animate({height:"toggle"}).removeClass("hidden").find(".alert").text("Lo siento no hay suficiente stock para "+a.name),setTimeout(function(){$(".updateItem").animate({height:"toggle"},1e3)},7e3)})["finally"](function(){})},n}]),myApp.factory("Coupon",["$http","Cart","$rootScope",function(t,e,n){var a={};return a.useCoupon=function(a){return t({headers:{Accept:"application/json","Content-Type":"application/json"},url:baseUrl+"/carts/"+e.getCartId()+"/coupons/"+a+"?client_secret="+client_secret+"&client_id="+client_id,method:"GET"}).then(function(t){$("#no-coupon").addClass("hidden"),$("#yes-coupon").removeClass("hidden"),n.carts=t.data.data})["catch"](function(t){$("#no-coupon").removeClass("hidden"),$("#yes-coupon").addClass("hidden")})["finally"](function(){})},a}]),myApp.factory("Email",["$http","$location","$rootScope","Cart",function(t,e,n,a){var c={};return c.doEmail=function(c){return t({headers:{Accept:"application/json","Content-Type":"application/json"},url:baseUrl+"/auth/email/"+c+"/"+a.getCartId()+"/?client_secret="+client_secret+"&client_id="+client_id,method:"GET"}).then(function(t){n.carts=t.data.data,e.path("/profile")})["catch"](function(t){})["finally"](function(){})},c}]),myApp.factory("Profile",["$http","$rootScope","$location",function(t,e,n){var a=[];return a.updateData=function(a){return t({headers:{Accept:"application/json","Content-Type":"application/json"},url:baseUrl+"/orders/"+e.carts.order_id+"?client_secret="+client_secret+"&client_id="+client_id,method:"PUT",data:a}).then(function(t){e.carts=t.data.data,n.path("/shipping")})["catch"](function(t){})["finally"](function(){})},a}]),myApp.factory("Shipping",["$http","User","$rootScope","Cart",function(t,e,n,a){var c={};return c.getAddresses=function(){return t({headers:{Accept:"application/json","Content-Type":"application/json"},url:baseUrl+"/carts/"+a.getCartId()+"/customers/"+e.getUserId()+"/addresses?client_secret="+client_secret+"&client_id="+client_id,method:"GET"}).then(function(t){n.addresses=t.data.data})["catch"](function(t){n.states=t.data})["finally"](function(){})},c.getStates=function(){return t({headers:{Accept:"application/json","Content-Type":"application/json"},url:baseUrl+"/states?client_secret="+client_secret+"&client_id="+client_id,method:"GET"}).then(function(t){n.states=t.data.states})["catch"](function(t){})["finally"](function(){})},c.getCities=function(e){return t({headers:{Accept:"application/json","Content-Type":"application/json"},url:baseUrl+"/cities/"+e+"?client_secret="+client_secret+"&client_id="+client_id,method:"GET"}).then(function(t){n.cities=t.data.cities,n.defaultCity=t.data.cities[0]})["catch"](function(t){})["finally"](function(){})},c.create=function(c){return t({headers:{Accept:"application/json","Content-Type":"application/json"},url:baseUrl+"/carts/"+a.getCartId()+"/customers/"+e.getUserId()+"/addresses?client_secret="+client_secret+"&client_id="+client_id,method:"POST",data:c}).then(function(t){n.addresses=t.data.data})["catch"](function(t){})["finally"](function(){})},c.getShippingMethod=function(){return t({headers:{Accept:"application/json","Content-Type":"application/json"},url:baseUrl+"/carts/"+a.getCartId()+"/shipping?client_secret="+client_secret+"&client_id="+client_id,method:"GET"}).then(function(t){n.shipping_methods=t.data.data})["catch"](function(t){})["finally"](function(){})},c.doShippingMethod=function(e){return t({headers:{Accept:"application/json","Content-Type":"application/json"},url:baseUrl+"/orders/"+n.carts.order_id+"?client_secret="+client_secret+"&client_id="+client_id,method:"PUT",data:e}).then(function(t){n.carts=t.data.data})["catch"](function(t){})["finally"](function(){})},c.assignShipping=function(e){return t({headers:{Accept:"application/json","Content-Type":"application/json"},url:baseUrl+"/orders/"+n.carts.order_id+"?client_secret="+client_secret+"&client_id="+client_id,method:"PUT",data:e}).then(function(t){n.carts=t.data.data})["catch"](function(t){})["finally"](function(){})},c}]),myApp.factory("Payment",["$http","$location","$rootScope","Cart",function(t,e,n,a){var c={};return c.getPaymentMethod=function(){return t({headers:{Accept:"application/json","Content-Type":"application/json"},url:baseUrl+"/payments/?client_secret="+client_secret+"&client_id="+client_id,method:"GET"}).then(function(t){n.payment_methods=t.data.data})["catch"](function(t){})["finally"](function(){})},c.doPayment=function(n){return t({headers:{Accept:"application/json","Content-Type":"application/json"},url:baseUrl+"/payments"+n+"/carts/"+a.getCartId()+"?client_secret="+client_secret+"&client_id="+client_id,method:"GET"}).then(function(t){t.data.url&&(localStorage.removeItem("cart_id"),$MPC.openCheckout({url:t.data.url,mode:"modal",onreturn:function(t){e.reload()}}))})["catch"](function(t){})["finally"](function(){})},c}]);