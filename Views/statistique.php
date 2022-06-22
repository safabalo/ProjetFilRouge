<?php
  $dataDoc = new DoctorsController();
  $nbrDocs =$dataDoc->CountAllDoctors();
  $dataPat = new UserController();
  $nbrPats =$dataPat->CountAllPatients();
  $femmePat=$dataPat->PatFemme();
  $hommePat=$dataPat->PatHomme();
//   $dataEtd=new etudiantController();
//   $femmeEtd=$dataEtd->EtdFemme();
//   $hommeEtd=$dataEtd->EtdHomme();
//   $nbrEtds =$dataEtd->CountAllEtds();
//   $dataPrnt=new ParentsController();
//   $femmePrnt=$dataPrnt->ParentFemme();
//   $hommePrnt=$dataPrnt->ParentHomme();
//   $femme=$femmeProf[0]+$femmeEtd[0]+$femmePrnt[0];
//   $homme=$hommeProf[0]+$hommeEtd[0]+$hommePrnt[0];
//   $cls = new ClassesController();
//   $nbrClasses =$cls->CountAllClasses();
//   $nbrCls1 =$cls->CountEtdsCls(1);
//   $nbrCls2 =$cls->CountEtdsCls(2);
//   $nbrCls3 =$cls->CountEtdsCls(3);
//   $nbrCls4 =$cls->CountEtdsCls(4);
?>