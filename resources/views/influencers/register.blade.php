@extends('layouts.app')

@section('datePickers')

    <link rel="stylesheet" href="{{asset('plugins/flatpickr.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/custom-flatpickr.css')}}">
    
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shadow p-3 mb-5 bg-white rounded">
                    <form id="register-influencer">
                        @csrf
                        <div class="divs">
                            <div class="cls as">
                                <div class="card-title">
                                    <h4>Mis redes sociales</h4>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                      <label for="name">Nombre</label>
                                      <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="url_fb">URL de Instagram</label>
                                        <input type="text" class="form-control" id="url_ig" name="url_ig">
                                    </div>
                                    <div class="form-group col-md-12 mt-3">
                                        <label for="description">Descripción de la web</label>
                                        <textarea id="textarea" name="description" class="form-control textarea mb-4" maxlength="300" rows="3" ></textarea>                        
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="country_audience">Pais mayoria de la audiencia</label>
                                        <select  id="country_audience" name="country_audience" class="form-control">
                                            <option>Seleccione...</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Brasil">Brasil</option>
                                            <option value="Estados Unidos">Estados Unidos</option>
                                            <option value="Francia">Francia</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="language">Idioma</label>
                                        <select  id="language" name="language" class="form-control">
                                            <option>Seleccione...</option>
                                            <option value="Español">Español</option>
                                            <option value="Ingles">Ingles</option>
                                            <option value="Frances">Frances</option>
                                            <option value="Portugues">Portugues</option>
                                        </select>
                                    </div>
                                    <fieldset class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12 mt-4">
                                                <label class="ml-3">Aviso de publicidad</label>
                                                <div class="form-check mt-2">
                                                    <label class="new-control new-radio radio-primary">
                                                        <input type="radio" value="1" class="new-control-input" name="advertisement_notice" id="advertisement_yes" checked>
                                                        <span class="new-control-indicator"></span>Siempre indicaré en mis publicaciones patrocinadas que ese texto es publicidad
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="new-control new-radio radio-primary">
                                                        <input type="radio" value="0" class="new-control-input" name="advertisement_notice" id="advertisement_no" >
                                                        <span class="new-control-indicator"></span>Dependerá de cada caso, de la marca y el producto que hable
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    
                                    <div class="form-group col-md-12 mt-4">
                                        <input class="upload-img" name="image[]" id="image" multiple="multiple" type="file">
                                        <div class="input-dragDrop">
                                            <div class="input-inner">
                                                <div class="input-icon"><i class="fa fa-file-image-o"></i></div>
                                                <div class="input-text">
                                                    <h3>Arrastra y suelta tu imagen aquí!</h3> <span style="display:inline-block; margin: 15px 0">300x300px (como mínimo). Sólo PNG y JPEG</span>
                                                </div>
                                                <a class="input-choose-btn blue">Subir imagen</a>
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="form-group col-md-12 mt-4">
                                        <label>Categorías a la a que pertenece tu red social</label>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <label class="new-control new-checkbox new-checkbox-text checkbox-primary">
                                                  <input type="checkbox" id="animales" name="category_redSocial" value="Animales" class="new-control-input">
                                                  <span class="new-control-indicator"></span><span class="new-chk-content">Animales</span>
                                                </label>
                                            </div>
                
                                            <div class="form-check">
                                                <label class="new-control new-checkbox new-checkbox-text checkbox-primary">
                                                  <input type="checkbox" id="Deportes" name="category_redSocial" value="Deportes" class="new-control-input">
                                                  <span class="new-control-indicator"></span><span class="new-chk-content">Deportes</span>
                                                </label>
                                            </div>
                
                                            <div class="form-check">
                                                <label class="new-control new-checkbox new-checkbox-text checkbox-primary">
                                                  <input type="checkbox" name="category_redSocial" value="Diario" class="new-control-input">
                                                  <span class="new-control-indicator"></span><span class="new-chk-content">Diario</span>
                                                </label>
                                            </div>
                
                                            <div class="form-check">
                                                <label class="new-control new-checkbox new-checkbox-text checkbox-primary">
                                                  <input type="checkbox" name="category_redSocial" value="Fotografia y diseño" class="new-control-input">
                                                  <span class="new-control-indicator"></span><span class="new-chk-content">Fotografia y diseño</span>
                                                </label>
                                            </div>
                
                                            <div class="form-check">
                                                <label class="new-control new-checkbox new-checkbox-text checkbox-primary">
                                                  <input type="checkbox" name="category_redSocial" value="Belleza" class="new-control-input">
                                                  <span class="new-control-indicator"></span><span class="new-chk-content">Belleza</span>
                                                </label>
                                            </div -->
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Fecha de inicio de vacaciones</label>
                                        <input type="text" name="start_vacation" id="start_vacation" value="2020-12-20" class="form-control flatpickr flatpickr-input active" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Fecha de fin de vacaciones</label>
                                        <input type="text" name="end_vacation" id="end_vacation" value="2020-12-20" class="form-control flatpickr flatpickr-input active" >
                                    </div>            
                                </div> 
                            </div>
                            <div class="cls2 as">
                                <div class="card-title">
                                    <h4>Servicios y precios</h4>
                                </div>
                                <div class="row ml-5 mt-3">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="form-check mb-2">
                                                <label class="new-control new-checkbox new-checkbox-text checkbox-primary">
                                                    <input type="checkbox" value="1" name="photo_ig" id="photo_ig" class="new-control-input">
                                                    <span class="new-control-indicator"></span><span class="new-chk-content">Foto en Instagram</span>
                                                </label>
                                            </div>
                                            <span class="h6">El servicio consiste en Publicar una foto en instagram con un texto asociado y uno o varios <br> hastags a elegir por el anunciante.</span>
                                            <div class="form-inline align-items-center mt-4 d-none" id="photo_ig_inputs">
                                                <label class="my-1 mr-2" for="price">Valor por este paquete</label>
                                                <input type="text" name="price_photo_ig" id="price_photo_ig" class="form-control" placeholder="$">
                                                
                                                <label class="my-1 mr-2 ml-5" for="discount">Promoción descuento</label>
                                                <input type="number" name="discount_photo_ig" id="discount_photo_ig" class="form-control" max="100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3" style="width:718px">
                                        <div class="card-body">
                                            <div class="form-check mb-2">
                                                <label class="new-control new-checkbox new-checkbox-text checkbox-primary">
                                                    <input type="checkbox" value="1" id="video_ig" name="video_ig" class="new-control-input">
                                                    <span class="new-control-indicator"></span><span class="new-chk-content">Video en Instagram</span>
                                                </label>
                                            </div>
                                            <span class="h6">El servicio consiste en Publicar una video en Instagram con un texto asociado y uno o varios <br> hastags a elegir por la marca.</span>
                                            <div class="form-inline align-items-center mt-4 d-none" id="video_ig_inputs">
                                                <label class="my-1 mr-2" for="price">Valor por este paquete</label>
                                                <input type="text" name="price_video_ig" id="price_video_ig" class="form-control" placeholder="$">
                                                
                                                <label class="my-1 mr-2 ml-5" for="discount">Promoción descuento</label>
                                                <input type="number" name="discount_video_ig" id="discount_video_ig" class="form-control" max="100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card" style="">
                                        <div class="card-body">
                                            <div class="form-check mb-2">
                                                <label class="new-control new-checkbox new-checkbox-text checkbox-primary">
                                                    <input type="checkbox" value="1" name="story_ig" id="story_ig" class="new-control-input">
                                                    <span class="new-control-indicator"></span><span class="new-chk-content">Instagram Story</span>
                                                </label>
                                            </div>
                                            <span class="h6">El servicio consiste en Publicar un Instagram Story siguiendo el briefing definido por la marca.</span>
                                            <div class="form-inline align-items-center mt-4 d-none" id="story_ig_inputs">
                                                <label class="my-1 mr-2" for="price">Valor por este paquete</label>
                                                <input type="text" name="price_story_ig" id="price_story_ig" class="form-control" placeholder="$">
                                                
                                                <label class="my-1 mr-2 ml-5" for="discount">Promoción descuento</label>
                                                <input type="number" name="discount_story_ig" id="discount_story_ig" class="form-control" max="100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    <hr>
                    <div class="row">
                        <div class="col"><a class="btn btn-danger" id="prev">Anterior</a></div>
                        <div class="col"><button class="btn btn-success btn-block" type="submit">Guardar</button></div>
                        <div class="col"><a class="btn btn-primary float-right" id="next">Siguiente</a></div>
                    </div>
                </form>                    
                </div>
            </div>
        </div>       
    </div>
@endsection

@section('scripts')
    <script>        
        $('textarea.textarea').maxlength({
            alwaysShow: true,
            separator: ' de ',
            postText: ' caracteres escritos.'
        });

        let f1 = flatpickr($('#start_vacation'));
        let f2 = flatpickr($('#end_vacation'));
        
        $(document).ready(function(){
            $(".divs .as").each(function(e) {
                if (e != 0) $(this).hide();
            });         

            $("#next").click(function(){
                if ($(".divs .as:visible").next().length != 0)
                    $(".divs .as:visible").next().show().prev().hide();
                else {
                    $(".divs .as:visible").hide();
                    $(".divs .as:first").show();
                }
                return false;
            });

            $("#prev").click(function(){
                if ($(".divs .as:visible").prev().length != 0)
                    $(".divs .as:visible").prev().show().next().hide();
                else {
                    $(".divs .as:visible").hide();
                    $(".divs .as:last").show();
                }
                return false;
            });
        });
    </script>
    <script> 

        $('#photo_ig').click(function (){
            if ($("input[name='photo_ig']:checked").val()) {
                $('#photo_ig_inputs').removeClass('d-none');
            }else{
                $('#photo_ig_inputs').addClass('d-none');
            }
        });

        $('#video_ig').click(function (){
            if ($("input[name='video_ig']:checked").val()) {
                $('#video_ig_inputs').removeClass('d-none');
            } else{
                $('#video_ig_inputs').addClass('d-none');
            }
        });
        $('#story_ig').click(function (){
            if ($("input[name='story_ig']:checked").val()) {
                $('#story_ig_inputs').removeClass('d-none');
            }else{
                $('#story_ig_inputs').addClass('d-none');
            }
        });

        $('#register-influencer').submit(function (e){
            e.preventDefault();

            var start_vacation = $('#start_vacation').val();
            var end_vacation = $('#end_vacation').val();

           
            if (start_vacation > end_vacation) {
                Swal.fire({
                    title: 'Error',
                    text: 'La fecha de inicio de vacaciones no puede ser menor que la de fin',
                    icon: 'error',
                    confirmButtonText: 'Aceptar'
                });
                return;
            } else {

                var category_redSocial = new Array();
                $("input[name='category_redSocial']:checked").each(function() {
                    category_redSocial.push($(this).val());
                });

                $.ajax({
                    url: "{{ route('influencers.store') }}",
                    type: "POST",
                    data: {
                        name: $('#name').val(),
                        email: $('#email').val(),
                        url_ig: $('#url_ig').val(),
                        description: $('#textarea').val(),
                        country_audience: $('#country_audience').val(),
                        language: $('#language').val(),
                        advertisement_notice: $("input[name='advertisement_notice']:checked").val(),
                        image: $('#image').val(),
                        category_redSocial: category_redSocial,
                        start_vacation: start_vacation,
                        end_vacation: end_vacation,
                        photo_ig: $("input[name='photo_ig']:checked").val(),
                        video_ig: $("input[name='video_ig']:checked").val(),
                        story_ig: $("input[name='story_ig']:checked").val(),
                        price_photo_ig: $('#price_photo_ig').val(),
                        price_video_ig: $('#price_video_ig').val(),
                        price_story_ig: $('#price_story_ig').val(),
                        discount_photo_ig: $('#discount_photo_ig').val(),
                        discount_video_ig: $('#discount_video_ig').val(),
                        discount_story_ig: $('#discount_story_ig').val(),
                        _token: $("input[name='_token']").val()
                    },
                    success:function(res) {
                        if (res.errors) {
                            $.each(res.errors, function(key, value){
                                Swal.fire({
                                    title: 'Error',
                                    text: `Error: ${value}`,
                                    icon: 'error',
                                    confirmButtonText: 'Aceptar'
                                })
                            });
                        }else{
                            $('#register-influencer')[0].reset();
                            Swal.fire({
                                title: 'Gracias por registrar tu red social',
                                icon: 'success',
                                confirmButtonText: 'Aceptar'
                            })              
                        }
                    }
                })
            }
            
        })

    </script>
@endsection