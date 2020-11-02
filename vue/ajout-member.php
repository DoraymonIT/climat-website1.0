<?php require_once 'database_connect.php';
ob_start();
session_start();

// Submit L Equipe
if (isset($_POST['submit'])) {
   $extensions_arr = array("jpg", "jpeg", "png", "gif");
   $imgName = $_FILES['image-bla']['name'];
   $target_dir = "upload/";
   $target_file = $target_dir . basename($_FILES["image-bla"]["name"]);
   $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
   if (in_array($imageFileType, $extensions_arr)) {
      $name = $_POST['nom'];
      $job = $_POST['job'];
      $description = $_POST['description'];
      $image_base64 = base64_encode(file_get_contents($_FILES['image-bla']['tmp_name']));
      $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
      $sql = $base->query('INSERT INTO peoples (nom,description,image,job)VALUES ("' . $name . '","' . $description . '","' . $image . '","' . $job . '")');
      $newname =  $name . "." . $imageFileType;
      move_uploaded_file($_FILES['image-bla']['tmp_name'], $target_dir . $newname);
   }

   header('location:equipe-admin.php');
}
// Submit L Gallery
if (isset($_POST['submit-gallery'])) {

   $target_dir = "upload/";
   $target_file1 = $target_dir . basename($_FILES["image1"]["name"]);
   $imageFileType1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
   $target_file2 = $target_dir . basename($_FILES["image2"]["name"]);
   $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
   $target_file3 = $target_dir . basename($_FILES["image3"]["name"]);
   $imageFileType3 = strtolower(pathinfo($target_file3, PATHINFO_EXTENSION));

   $pays = $_POST['pays'];
   $client = $_POST['client'];
   $description = $_POST['description'];
   $image_base64_1 = base64_encode(file_get_contents($_FILES['image1']['tmp_name']));
   $image1 = 'data:image/' . $imageFileType1 . ';base64,' . $image_base64_1;

   $image_base64_2 = base64_encode(file_get_contents($_FILES['image2']['tmp_name']));
   $image2 = 'data:image/' . $imageFileType2 . ';base64,' . $image_base64_2;

   $image_base64_3 = base64_encode(file_get_contents($_FILES['image3']['tmp_name']));
   $image3 = 'data:image/' . $imageFileType3 . ';base64,' . $image_base64_3;

   $sql = $base->query('INSERT INTO gallery (pays,client,image1,image2,image3,description) VALUES ("' . $pays . '","' . $client . '","' . $image1 . '","' . $image2 . '","' . $image3 . '","' . $description . '")');
   echo "Yes";
   $newname1 =  $client . "1." . $imageFileType1;
   move_uploaded_file($_FILES['image1']['tmp_name'], $target_dir . $newname1);
   $newname2 =  $client . "2." . $imageFileType2;
   move_uploaded_file($_FILES['image2']['tmp_name'], $target_dir . $newname2);
   $newname3 =  $client . "3." . $imageFileType3;
   move_uploaded_file($_FILES['image3']['tmp_name'], $target_dir . $newname3);



   header('location:gallery-admin.php');
}
// Submit L Client / Fournisseur
if (isset($_POST['submit-cl-fr'])) {
   $extensions_arr = array("jpg", "jpeg", "png", "gif");
   $imgName = $_FILES['image']['name'];
   $target_dir = "upload/";
   $target_file = $target_dir . basename($_FILES["image"]["name"]);
   $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
   if (in_array($imageFileType, $extensions_arr)) {
      $name = $_POST['nom'];
      $cat = $_POST['categorie'];
      $description = $_POST['description'];
      $ref = $_POST['reference'];
      $image_base64 = base64_encode(file_get_contents($_FILES['image']['tmp_name']));
      $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
      $sql = $base->query('INSERT INTO client_fournisseur (nom,description,image,reference,categorie)VALUES ("' . $name . '","' . $description . '","' . $image . '","' . $ref . '","' . $cat . '")');
      if ($sql) {
         echo "YES";
         $newname =  $name . "-" . $cat . "." . $imageFileType;
         move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $newname);
         header('location:client-fournisseur-admin.php');
      } else {
         echo "Cliquez retour, et valider a nouveau";
      }
   }
}
// Submit L Produits
if (isset($_POST['submit-produit'])) {
   $extensions_arr = array("jpg", "jpeg", "png", "gif");
   $imgName = $_FILES['image']['name'];
   $target_dir = "upload/";
   $target_file = $target_dir . basename($_FILES["image"]["name"]);
   $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
   if (in_array($imageFileType, $extensions_arr)) {
      $name = $_POST['nom'];
      $description = $_POST['description'];
      $image_base64 = base64_encode(file_get_contents($_FILES['image']['tmp_name']));
      $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
      $sql = $base->query('INSERT INTO produits (nom,description,image)VALUES ("' . $name . '","' . $description . '","' . $image . '")');
      $newname =  $name . "." . $imageFileType;
      move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $newname);
   }

   header('location:admin-produits.php');
}

// Submit CA
if (isset($_POST['submit-ca'])) {

   $annee = $_POST['annee'];
   $combien = $_POST['combien'];

   $sql = $base->query('INSERT INTO ca (annee,combien)VALUES ("' . $annee . '","' . $combien . '")');



   header('location:evolution-admin.php');
}

// Submit CONTACT FORM
if (isset($_POST['submit-contact'])) {

   $name = $_POST['nom'];
   $adress = $_POST['adress'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $sujet = $_POST['sujet'];


   $sql = $base->query('INSERT INTO contact (nom,adress,email,phone,sujet)VALUES ("' . $name . '","' . $adress . '","' . $email . '","' . $phone . '","' . $sujet . '")');

   if ($sql) {
      $_SESSION['x'] = " <strong>Merci ,</strong> Votre demande a ete enregistre avec success .";
      header('location:contact.php');
      // echo " Demande a enregistre avec succees : <a href='index.php' >Acceuil</a>";
   } else {
      $_SESSION['x'] = " <strong>Oupps ,</strong> Erreur, Saisir a nouveau votre demande .  ";
      header('location:contact.php');
      // echo "<h6 style='color:red'>Failed to save , Try Again <a href='contact.php' >Contact</a></h6>";
   }

   // header('location:evolution-admin.php');
}
// Submit L Services
if (isset($_POST['submit-service'])) {
   $extensions_arr = array("jpg", "jpeg", "png", "gif");
   $imgName = $_FILES['image']['name'];
   $target_dir = "upload/";
   $target_file = $target_dir . basename($_FILES["image"]["name"]);
   $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
   if (in_array($imageFileType, $extensions_arr)) {
      $name = $_POST['nom'];
      $description = $_POST['description'];
      $image_base64 = base64_encode(file_get_contents($_FILES['image']['tmp_name']));
      $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
      $sql = $base->query('INSERT INTO services (nom,description,image)VALUES ("' . $name . '","' . $description . '","' . $image . '")');
      $newname =  $name . "." . $imageFileType;
      move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $newname);
   }
   header('location:sup-admin.php');
}
// Edit Info de base
if (isset($_POST['submit-info'])) {

   $adress = $_POST['adresse'];
   $tel1 = $_POST['tel1'];
   $tel2 = $_POST['tel2'];
   $email = $_POST['email'];
   $sql = $base->query('UPDATE info SET adresse = "' . $adress . '" , phone1="' . $tel1 . '", phone2="' . $tel2 . '" , email="' . $email . '" WHERE id = 1');
   if ($sql) {
      echo "Yes , Success";
      header('location:sup-admin.php');
   } else {
      echo "NO , Erreur ";
   }
}
// Edit mage acceuil
if (isset($_POST['submit-acceuil'])) {
   $extensions_arr = array("jpg", "jpeg", "png", "gif");
   $imgName = $_FILES['image']['name'];
   $target_dir = "upload/";
   $target_file = $target_dir . basename($_FILES["image"]["name"]);
   $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
   if (in_array($imageFileType, $extensions_arr)) {

      $image_base64 = base64_encode(file_get_contents($_FILES['image']['tmp_name']));
      $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
      $sql = $base->query('UPDATE img_acc SET image_accueil = "' . $image . '" WHERE id = 1');
      $newname =  "Acceuil" . "." . $imageFileType;
     
      if ($sql) {
         echo "Yes , Success";
         move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $newname);
         header('location:sup-admin.php');
      } else {
         echo "NO , Erreur ";
      }
   }
   // header('location:sup-admin.php');
}


// Edit LOGO 
if (isset($_POST['submit-logo'])) {
   $extensions_arr = array("jpg", "jpeg", "png", "gif");
   $imgName = $_FILES['image']['name'];
   $target_dir = "upload/";
   $target_file = $target_dir . basename($_FILES["image"]["name"]);
   $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
   if (in_array($imageFileType, $extensions_arr)) {

      $image_base64 = base64_encode(file_get_contents($_FILES['image']['tmp_name']));
      $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
      // $sql = $base->query('INSERT INTO img_logo (image_logo)VALUES ("' . $image . '")');
      $sql = $base->query('UPDATE img_logo SET image_logo = "' . $image . '" WHERE id = 1');
      $newname =  "Logo" . "." . $imageFileType;
      if ($sql) {
         echo "Yes , Success";
         move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $newname);
         header('location:sup-admin.php#pills-contact');
      } else {
         echo "NO , Erreur ";
      }
   }
   // header('location:sup-admin.php');
}
