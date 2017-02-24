<div class="table-responsive">
    <table class="table table-hover table-bordered domain" id="table-domain">
        <thead>
        <tr>
            <th style="width: 20%; text-align: center;">Nombre Dominio</th>
            <th style="width: 30%; text-align: center;">Status</th>
            <th style="width: 40%"> </th>
        </tr>
        </thead>
        <tbody>
        @foreach($domains as $domain)
            <tr style="border-style:hidden;">
                <td>
                    @if($domain->status->code != '200')
                        <a href="{{ url("admin/configuration/domain/settings/$domain->uuid") }}">{{ $domain->name }}</a>
                    @else
                        <a href="{{ $domain->secure.'://'.$domain->name }}">{{ $domain->name }}</a>
                    @endif
                </td>
                <td  class="text-center">
                    {!! \Tendaz\components\HtmlGenerator::spanStatus($domain->status->code) !!}
                </td>
                @if($domains[0]->name != $domain->name)
                    <td class="text-center">
                        @if($domain->status->code == '401')
                            <a class="btn btn-default btn-xs complete-install" data-name="{{ $domain->name }}">Completar instalacion</a>
                        @elseif($domain->status->code == '402')
                            <a class="btn btn-default btn-xs " data-name="{{ $domain->name }}">Completar instalacion ssl</a>
                        @endif
                        <button class="btn btn-danger btn-xs domain-delete" data-name="{{ $domain->name }}"  data-uuid="{{ $domain->uuid }}"><i class="fa fa-times"></i></button>
                    </td>
                @endif
            </tr>
            @foreach($domain->subDomain as $www)
                <tr>
                    <td style="padding-left: 30px">
                        @if($www->status->code != '200')
                            <a href="{{ url("admin/configuration/domain/settings/$www->uuid") }}">{{ $www->name }}</a>
                        @else
                            <a href="{{ $www->secure.'://'.$www->name }}">{{ $www->name }}</a>
                        @endif
                    </td>
                    <td  class="text-center">
                        {!! \Tendaz\components\HtmlGenerator::spanStatus($www->status->code) !!}
                    </td>
                    <td class="text-center">
                        @if($www->status->code == '401')
                            <a class="btn btn-default btn-xs complete-install" data-name="{{ $www->name }}">Completar instalacion</a>
                        @elseif($www->status->code == '402')
                            <a class="btn btn-default btn-xs " data-name="{{ $www->name }}">Completar instalacion ssl</a>
                        @elseif($www->status->code == '407')
                            <a class="btn btn-default btn-xs " data-name="{{ $www->name }}">Completar hsot a  tendaz</a>
                        @endif
                        <button class="btn btn-danger btn-xs domain-delete" data-name="{{ $www->name }}" data-uuid="{{ $www->uuid }}"><i class="fa fa-times"></i></button>
                    </td>
                </tr>
            @endforeach
        @endforeach
        </tbody>
    </table>
</div>
