<?php
   /* @var $this yii\web\View */
   /* @var $bookList frontend\models\Book */
   use yii\widgets\ActiveForm;
   use yii\helpers\Html;
   ?>
<div class="col-md-7">
   <h1>Bookshop</h1>
   <br>
   <br>
   <br>
   <table class="table table-condensed">
      <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Author</th>
         <th>Year</th>
         <th>Manufacturer</th>
      </tr>
      <?php foreach($bookList as $book): ?>
      <tr>
         <td><?php echo $book->id; ?></td>
         <td><?php echo $book->name; ?></td>
         <td><?php echo $book->author; ?></td>
         <td><?php echo $book->getYearPublished(); ?></td>
         <td><?php echo $book->getManufacturer(); ?></td>
      </tr>
      <? endforeach; ?>
   </table>
</div>
<div class="col-md-5">
   <h1>Search </h1>
   <div class="col-md-12">
      <?php $form = ActiveForm::begin(); ?>
      <?php echo $form->field($model, 'keyword');?>
      <?php echo $form->field($model, 'radio')->radioList( ['id' =>'id', 'author' => 'author', 'manufacturer' => 'manufacturer', 'year' => 'year'], ['unselect' => null] ); ?>
      <?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']); ?><br>/*getBooksByName() по умолчанию  без переключателя */ 
      <hr>
      <?php ActiveForm::end(); ?>
   </div>
   <div class="col-md-12">
      <?php if($results): ?>
      <?php foreach($results as $item): ?>
      <?php echo $item['name']; ?>
      <br>
      <?php echo $item['author']; ?>
      <?php echo "<hr>"; ?>
      <?php endforeach; ?>
      <?php endif; ?>
   </div>
</div>