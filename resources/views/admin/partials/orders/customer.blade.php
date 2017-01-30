<div class="widget">
    <div class="panel-body">
        <ul class="list-unstyled">
            <li class="text-center">
                @if($customer->avatar)
                    <img class="img-rounded img-bordered-inverse" src="{{ asset("profile/".$customer->avatar) }}" alt width="100px" height="100px">
                @else
                    <img class="img-rounded img-bordered-inverse" src="{{ asset('administrator/image/avatar/avatar7.jpg') }}" alt width="100px" height="100px">
                @endif
            </li>
            <li class="text-center">
                <h4 class="semibold ellipsis">
                    <a href="{{asset("admin/customers/".$customer->uuid)}}"> {{ $customer->full_name }}</a>
                </h4>
            </li>
            <li class="text-center">
                <p class="text-center">
                    <strong>Correo:</strong>
                    {{ $customer->email }}
                    <br>
                    <strong>Identificaci&oacute;n:</strong>
                    {{ !$customer->identification ? 'Sin documento' :$customer->identification }}
                    <br>
                    <strong>Telefono:</strong>
                    {{ !$customer->phone ? 'Sin telefono' :$customer->phone }}
                </p>
            </li>
        </ul>
    </div>
    <br>
</div>