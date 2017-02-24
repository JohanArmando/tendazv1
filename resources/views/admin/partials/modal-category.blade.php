<!-- Modal -->
<div class="modal fade" id="modalCategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" >
            <div class="modal-header" style="background-color: #f9a03f; color: white">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center"  id="myModalLabel">Agregar nueva categoria</h4>
            </div>
            {!! Form::open(['class' => 'form-category' ]) !!}
            <input type="hidden" id="routeIdCategory" value="{{ url('admin/categories') }}">
            <input type="hidden" id="tokenCategory" value="{{ csrf_token()  }}">

            <div class="modal-body" >
                    <div class="row" style="padding-left: 5% !important;padding-right: 5% !important;">
                        <div class="col-md-12">
                            <label for="" class="">Nombre de la categoria</label>
                            <input type="text" class="form-control" id="nameCategory" name="category" >
                        </div>
                    </div>
            </div>
            <br>
            <div class="row" style="padding-left: 5%;padding-right: 5%;">
                <div class="col-md-12 ">
                    <a class="btn btn-default" role="button"  data-toggle="collapse" href="#subCategoria" aria-expanded="false" aria-controls="collapseExample">
                        Esta categoria sera una subcategoria de
                    </a>
                    <br>
                    <br>
                    <div class="collapse" id="subCategoria">
                        <div class="well">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <label for="">Sub Categoria</label>
                                    {!! Form::select('sub-category',$categories, null, ['style' => 'width: 100%' ,'class' => "form-control", "id" => "sub"])!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-left: 5%;padding-right: 5%;">
                    <div class="col-md-12">
                        <div class="panel-group" id="accordion1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne" class="collapsed">
                                            <span class="arrow mr5"></span> Opciones avanzadas
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="">Titulo seo</label>
                                                <input name="title_seo_category" id="title_seo" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="">Descripcion seo</label>
                                                <input  name="description-seo-category" id="description_seo" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">

                                                <label for="">Url de la categoria</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">{{ url('products/') }}</span>
                                                    <input name="url-category" id="url_product" type="text" class="form-control" style="height: 35px; text-align: center">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div style="margin-right: 10%;" class="pull-right">
                        {!!link_to('#', $title='Crear Categoria',$attributes = ['id'=>'submitCategory','class'=>'btn btn-primary btn-block'],$secure = null) !!}
                      </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <br><br>
            </div>
        </div>
    </div>