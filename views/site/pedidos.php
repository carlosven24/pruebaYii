<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;
use kartik\select2\Select2;
use kartik\date\DatePicker;
?>


<?php $form = ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data']
]); ?>

<?php

$data = ['Arte', 'Cultura','Estilo de vida','España'];

?>

<?php
    $this->title = "";
?>




    <div class='container'>

        <div class='row justify-content-center'>

        <div class="col-md-8">
            <h1 class='font-weight-bold'>Creación de pedido</h1>
        </div>
    
<div class="col-md-8 row py-5">
    <div class="col-md-6">
    <?php $var = ['Texto','Texto 2'];  ?>
    <?= $form->field($model, 'formato')->dropDownList($var); ?>
    </div>
    <div class="col-md-6">
    <?php $var = ['Texto Especializado','Texto 2'];  ?>
    <?= $form->field($model, 'tipo')->dropDownList($var); ?>
    </div>
</div>

<div class="col-md-8 py-5">

    <?= $form->field($model, 'categoria')->widget(Select2::classname(), [
    'name' => 'color_2',
    'data' => $data,
    'value' => ['Arte', 'Cultura','Estilo de vida'], // initial value
    'maintainOrder' => true,
    'options' => ['multiple' => true],
    'pluginOptions' => [
        'tags' => true,
        'maximumInputLength' => 20
    ],
]); ?>
    <div class='mt-1'>
        <small class='en'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget.</small>
    </div>
</div>

<div class="col-md-8 py-5">
    <h5 class='en-title pb-3'>Modalidad deseada para tu pedido</h5>
    <div class="row">
        <div class="col-md-6 ">
            <div class='modalidadOption'>
                    <div class='p-1'>
                        <?= $form->field($model, 'modalidad')->radio(['label' => 'Concurso', 'value' => 1]) ?>
                    </div>
                <small class='en'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</small>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class='modalidadOption'>
                <div class='p-1'>
                    <?= $form->field($model, 'modalidad')->radio(['label' => 'Proveedor Favorito', 'value' => 2]) ?>
                </div>
                <small class='en'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</small>
            </div>
        </div>
    </div>
</div>


<div class="col-md-8 py-5">
        <?= $form->field($model, 'nombre')->label('Nombre de tu proyecto'); ?>
</div>


<div class="col-md-8 py-5">
    <h5>Proposito del texto</h5>
    <div class="row">
        <div class="col-md-6 ">
            <div class='modalidadOption'>
                    <div class='p-1'>
                        <?= $form->field($model, 'proposito')->radio(['label' => 'Contenido de blog', 'value' => 1]) ?>
                    </div>
                <small class='en'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</small>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class='modalidadOption'>
                <div class='p-1'>
                    <?= $form->field($model, 'proposito')->radio(['label' => 'Guiones', 'value' => 2]) ?>
                </div>
                <small class='en'>Lorem ipsum dolor sit amet,consectetuer adipiscing elit. Aenean commodo ligula eget dolor..</small>
            </div>
        </div>
    </div>
</div>


<div class='col-md-8 row py-5'>
<div class="col-md-5">
    <?php $var = ['250 a 499','500 a 750'];  ?>
    <?= $form->field($model, 'extension')->dropDownList($var)->label('Extensión máxima de palabras'); ?>    
</div>
<div class="col-md-10">
    <small class='en'>Lorem ipsum dolor sit amet,consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet,consectetuer adipiscing elit. Aenean commodo ligula eget dolor</small>
</div>
</div>




<div class="row col-md-8">
<div class="col-md-6 my-5">
<?= $form->field($model, 'paises')->widget(Select2::classname(),[
    'name' => 'color_2',
    'data' => $data,
    'value' => ['Colombia','Ecuador'], // initial value
    'maintainOrder' => true,
    'options' => ['multiple' => true],
    'pluginOptions' => [
        'tags' => true,
        'maximumInputLength' => 20
    ],
])->label('Países a los que está dirigido'); ?>
    <small class='en'>Lorem ipsum dolor sit amet,consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</small>
</div>
</div>




<div class="col-md-8 row"> 
<div class="col-md-6 my-5">
    <?php $var = ['Español','Ingles'];  ?>
    <?= $form->field($model, 'idioma')->dropDownList($var)->label('Idioma de tu pedido');; ?>
    <small class='en'>Lorem ipsum dolor sit amet,consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</small>
</div>
</div>




<div class='col-md-8 row py-5'>
<div class="col-md-3">
    <?php $var = ['Si','No'];  ?>
    <?= $form->field($model, 'seo')->dropDownList($var)->label('Optimización SEO'); ?>    
</div>
<div class="col-md-10">
    <small class='en'>Lorem ipsum dolor sit amet,consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet,consectetuer adipiscing elit. Aenean commodo ligula eget dolor</small>
</div>
</div>






<div class="col-md-8 py-5">
        <?= $form->field($model, 'palabra_clave')->label('Palabra Clave principal'); ?>
        <div>
            <small class='en'>Lorem ipsum dolor sit amet,consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</small>
        </div>
</div>


<div class="col-md-8 py-5">
        <?= $form->field($model, 'semantica')->label('Palabra(s) semántica(s) o sencudaria(s)'); ?>
        <div>
            <small class='en'>Lorem ipsum dolor sit amet,consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</small>
        </div>
</div>


<div class="col-md-8 py-5">
        <?= $form->field($model, 'descripcion')->label('Descripción del pedido')->textarea(['rows' => '4']); ?>
        <div>
            <button class='btn btn-primary btnFile' type='button' id='botonArchivo'><i class="fa fa-upload"></i> Adjunta Archivo</button>
            <button class='btn btn-primary btnFile ml-4' type='button' id='botonAudio' for='audio'><i class="fa fa-microphone"></i> Grabar intrucciones</button>
        
        <div style='display:none;'> 
            <?= $form->field($model, 'archivo')->fileInput(['accept' => '.doc,.docx,.docx,.pdf','id' => 'archivo']); ?>
            <?= $form->field($model, 'audio')->fileInput(['accept' => '.mp3','id' => 'audio']); ?> 
        </div>



        </div>
</div>



<div class="col-md-8 py-5">
        <?= $form->field($model, 'publico_objetivo')->label('Público Objetivo')->textarea(['rows' => '4']); ?>
</div>



<div class="radioInput col-md-8 py-5">
        <h5 class='en-title pb-4'>Perspectiva del texto</h5>
        <?= $form->field($model, 'perspectiva')->radio(['label' => 'Primera persona del singular (yo,mí,mi)', 'value' => 1,'class' => 'optionDefault']); ?>
        <?= $form->field($model, 'perspectiva')->radio(['label' => 'Primera persona del plural (nosotros,nuestro(s),nuestra(s))', 'value' => 2,'class' => 'optionDefault']); ?>
        <?= $form->field($model, 'perspectiva')->radio(['label' => 'Segunda persona,formal o informal', 'value' => 3,'id' => 'option3']); ?>
       <div class='ml-5'>
        <?= $form->field($model, 'perspectiva2')->radio(['label' => 'Usted,su,sus', 'value' => 4,'class' => 'option3','id' => 'option4']); ?>
        <?= $form->field($model, 'perspectiva2')->radio(['label' => 'Tú,tu,tus', 'value' => 5, 'class' => 'option3']); ?>
        </div>
        <?= $form->field($model, 'perspectiva')->radio(['label' => 'Tercera persona(ellos,ellas,su(s))', 'value' => 6,'class' => 'optionDefault']); ?>



</div>


<div class='col-md-8 row'>
<div class="col-md-5 py-5">
    <?= $form->field($model, 'fecha_entrega')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => ''],
    'pickerIcon' => '<i class="fas fa-calendar-alt text-primary"></i>',
    'type' => DatePicker::TYPE_COMPONENT_APPEND,
    'removeButton' => false,
    'pluginOptions' => [
        'autoclose'=>true
    ]
]); ?>
    <div class='mt-1'>
        <small class='en'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget.</small>
    </div>
</div>
</div>






    </div>
</div>



<footer class="footer">
    <div class="row">
        <div class="col-3 col-md-3 pt-3">
            <p style='font-size:14px'>Proceso de creación de proyecto:<br>
            <b class='color-secundary'>Valor proyecto: 50 creditos</b>

            </p>

        </div>
        <div class="col-6 col-md-6 pt-2">
            <input type="range" class='rangeInput' min=0 max=100 value=50 step=1 list=tickmarks>
            <datalist id=tickmarks>
                <option value="0 to 20">0</option>
                <option>0</option>
                <option>20</option>
                <option>40</option>
                <option>60</option>
                <option>80</option>
                <option>100</option>
            </datalist>
            
            <div class="row">
                <div class="col-2">
                    <div class="point"></div>
                </div>
                <div class="col-2">
                    <div class="point"></div>
                </div>
                <div class="col-2">
                    <div class="point"></div>
                </div>
                <div class="col-2">
                    <div class="point"></div>
                </div>
                <div class="col-2">
                    <div class="point"></div>
                </div>
                <div class="col-2">
                    <div class="point"></div>
                </div>
                
            </div>

        </div>
        <div class="col-3 col-md-3 text-right pt-3">
        <?= Html::submitButton('Crear pedido', ['class' => 'btn btn-primary btnAdd  px-5']) ?>
        </div>
    </div>

</footer>

<?php ActiveForm::end(); ?>


<script>

$(document).ready(function(){ 

$('#botonArchivo').click(function() {
   $('#archivo').click();
});

$('#botonAudio').click(function() {
   $('#audio').click();
});

$("#option3").change(function(){
    $("#option4").prop("checked", true);
})

$(".option3").change(function(){
    $("#option3").prop("checked", true);
})

$(".optionDefault").change(function(){
    $(".option3").prop("checked", false);
});

});
        </script>


<style>
    .content-wrapper{
        padding:70px!important;
    }

    h1{
        font-weight:bold!important;
    }
</style>