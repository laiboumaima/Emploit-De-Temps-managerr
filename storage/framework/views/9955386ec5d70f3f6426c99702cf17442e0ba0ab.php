
<?php $__env->startSection('content'); ?> 
<div class="container">

		<h1 class="text-center">Modifier emploit<strong></strong></h1>

        <div>
       
             
            <?php echo e(Form::model($emp,array('route'=>array('emploit.update',$emp->id),'method'=>'PUT'))); ?>

            <p>
              <div class="form-group">
                  <?php echo Form::label('titre','Entrer le Titre de emploit'); ?>

                  <?php echo Form::text('Titre',$emp->Titre,['class'=>'form-control']); ?>

               </div>
            </p>

            <p>
                <div class="form-group">
                <?php echo Form::label('jours','Selectionner les jours'); ?>

                 <?php echo Form::select('jours', array('Dimanche' => 'Dimanche', 'Lundi' => 'Lundi','Mardi' => 'Mardi', 'Mercredi' => 'Mercredi','Jeudi' => 'Jeudi', 'Vendredi' => 'Vendredi','Samedi' => 'Samedi'), $emp->jours, ['placeholder' => 'choisit les jours...','multiple' => 'multiple','class'=>'mlt']); ?>

               </div>
             </p>
               
              <p>  
               <div class="form-group">
               	<?php echo Form::button('Update',['type'=>'submit','class'=>'btn btn_sucess']); ?>

                  <?php echo e(link_to_route('emploit.index','Annuler',null,['class'=>'btn btn_cnl'])); ?>

              </div>
              </p> 
             

            <?php echo Form::close(); ?>


        </div>

	
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Emp_web\resources\views/emploit/editer/emploit.blade.php ENDPATH**/ ?>