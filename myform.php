<?php
    //include('autoload.php');
    include('Form.php');

    $form = new Form([
         'method' => 'POST',
         'action' => 'form-handler.php'
    ]);

    $form->textbox([
         'name' => 'fullName', 
         'label' => 'Full name', 
         'required' => true, 
         'length' => 100 
    ]);

    $form->select([ 
         'name' => 'gender', 
         'options' => [
             'm' => 'Male', 
             'f' => 'Female'
         ]
    ]);

    $form->email([ 
         'name' => 'email', 
         'required' => true 
    ]);

    // also, create $form->radio(), 
    // $form->textarea(), 
    // $form->submit(), 
    // $form->button(), 
    // $form->hidden()

    echo $form->html();
