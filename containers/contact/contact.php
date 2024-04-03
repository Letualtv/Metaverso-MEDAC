<!-- CDN -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="contact.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!-- contact -->
<section id="contact" class="container mb-4">
    <div class="row ">
        <form data-cta="710" class="formulario mx-auto  col-lg-5 col-sm-12 col-md-8" id="formulario" data-drupal-selector="lead-form-solicita-info-tipo-1" action="/" method="post" id="lead-form-solicita-info-tipo-1" accept-charset="UTF-8" data-gtm-form-interact-id="0" siq_id="autopick_5318">
        <h2 class="text-center py-3">¡Quiero más información!</h2>
            <div class=" form-item js-form-type-textfield form-item-name -name form-floating form-group">

                <input data-drupal-selector="edit-name" type="text" id="edit-name" name="name" value="" size="60" maxlength="128" placeholder="Nombre" class="required form-control has-value" required="required" aria-required="true" data-gtm-form-interact-field-id="0">

                <label for="edit-name" class=" form-required">Nombre*</label>

            </div>
            <div class=" form-item js-form-type-tel form-item-phone m-phone form-floating form-group">

                <input minlength="9" maxlength="9" pattern="(\d{9})" data-drupal-selector="edit-phone" type="tel" id="edit-phone" name="phone" value="" size="30" placeholder="Teléfono" class=" form-tel required form-control" required="required" aria-required="true">

                <label for="edit-phone" class="form-required">Teléfono*</label>



            </div>
            <div class=" form-item js-form-type-email form-item-email form-floating form-group">

                <input pattern="[a-z0-9\._%+\-]+@[a-z0-9\.\-]+\.[a-z]{2,7}$" data-drupal-selector="edit-email" type="email" id="edit-email" name="email" value="" size="60" maxlength="254" placeholder="Correo electrónico" class="form-email required form-control" required="required" aria-required="true">

                <label for="edit-email" class=" form-required">Correo electrónico*</label>



            </div>
            <div class=" form-item   form-floating form-group">

                <input minlength="4" maxlength="5" pattern="\d*" data-drupal-selector="edit-cp" type="text" id="edit-cp" name="cp" value="" size="60" placeholder="Código postal" class="required form-control" required="required" aria-required="true">

                <label for="edit-cp" class=" form-required">Código postal*</label>



            </div>


            <div class="mb-3 form-floating form-item">
                <input class="form-control" name="" id="" placeholder="Pregunta" rows="3"></input>
                <label for="exampleInputEmail1" class="form-label">Pregunta</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="check1">
                    <label class=" ps-1 form-check-label" for="exampleCheck1">Al pulsar el botón, aceptas nuestra <a class="text-body" target="_blank" href="https://medac.es/politica-de-privacidad">Política de privacidad</a>
                    </label>
                </div>
                <div class=" form-check">
                    <input type="checkbox" class="form-check-input" id="check2">
                    <label class="text-body ps-1 form-check-label" for="exampleCheck1">Consiento en recibir comunicaciones comerciales de las empresas integrantes del Grupo Educa Holdco

                    </label>
                </div>
                <div class="py-4">
                    <button type="submit" type="button" id="sfButton" class="btn btn-lg align-end  rounded-pill">Solicitar información</button>
                </div>
        </form>
    </div>
</section>