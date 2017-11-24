<?php

require __DIR__ . '/vendor/autoload.php';

\Symfony\Component\Debug\Debug::enable();

$formFactory = (new \Symfony\Component\Form\FormFactoryBuilder)->getFormFactory();

$form = $formFactory->createBuilder()
    ->add('f', \Symfony\Component\Form\Extension\Core\Type\FileType::class)
    ->getForm()
;

$form->handleRequest();
dump($form->getViewData());
dump($form->getNormData());
dump($form->getData());

?>

<form action="./" method="post" enctype="multipart/form-data">
    <input type="file" name="form[f]">
    <button type="submit">submit</button>
</form>
