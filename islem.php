<?php
ob_start();
session_start();
include 'baglan.php';


/*GENEL İŞLEMLER*/

//Cari Ekleme
if (isset($_POST['cariekle'])) {
  $carikaydet=$db->prepare("INSERT INTO cariekrani_tbl SET
    firma_ad=:ad,
    vergi_no=:vergino,
    vergi_dairesi=:vergidairesi,
    adres=:adres,
    yetkili_kisi=:yetkili,
    irtibat_kisisi=:irtibat
    ");
    $insert=$carikaydet->execute(array(
      'ad' => $_POST['firma_ad'],
      'vergino' => $_POST['vergi_no'],
      'vergidairesi' => $_POST['vergi_dairesi'],
      'adres' => $_POST['adres'],
      'yetkili' => $_POST['yetkili_kisi'],
      'irtibat' => $_POST['irtibat_kisisi']
    ));

    if ($insert) {
      Header("Location:admin/cari.php?durum=ok");
    }
    else{
      Header("Location:admin/cari.php?durum=no");
    }
  }

  //Cari düzenleme
  if (isset($_POST['cariduzenle'])) {

    $carisor=$db->prepare("SELECT * FROM cariekrani_tbl where id=:id");
    $carisor->execute(array("id" => $_POST['id']));
    $caricek=$carisor->fetch(PDO::FETCH_ASSOC);

    $cariduzenle=$db->prepare("UPDATE cariekrani_tbl SET
      firma_ad=:ad,
      vergi_no=:vergino,
      vergi_dairesi=:vergidairesi,
      adres=:adres,
      yetkili_kisi=:yetkili,
      irtibat_kisisi=:irtibat
      WHERE id={$_POST['id']}
      ");
      $update=$cariduzenle->execute(array(
        'ad' => $_POST['firma_ad'],
        'vergino' => $_POST['vergi_no'],
        'vergidairesi' => $_POST['vergi_dairesi'],
        'adres' => $_POST['adres'],
        'yetkili' => $_POST['yetkili_kisi'],
        'irtibat' => $_POST['irtibat_kisisi']
      ));

      $id=$_POST['id'];

      if ($update) {
        Header("Location:admin/cari.php?durum=ok");
      }
      else{
        Header("Location:admin/cari.php?durum=no");
      }
    }

    //Cari silme
    if($_GET['carisil']=="ok") {

      $select = $db->prepare("SELECT * FROM cariekrani_tbl where id=:id");
      $select->execute(array('id' => $_GET['id']));
      $bul = $select->fetch(PDO::FETCH_ASSOC);

      $sil=$db->prepare("DELETE FROM cariekrani_tbl WHERE id=:id");
      $kontrol=$sil->execute(array('id' => $_GET['id']));

      if ($kontrol) {
        header("Location:admin/cari.php?durum=ok");

      } else{
        header("Location:admin/cari.php?durum=no");
      }
    }

    //Stok Ekleme
    if (isset($_POST['stokekle'])) {
      $stokkaydet=$db->prepare("INSERT INTO stokmalzeme_tbl SET
        urun_ad=:ad,
        urun_aciklama=:aciklama,
        urun_birim=:birim,
        urun_fiyat=:fiyat,
        urun_mevcutstok=:mevcutstok,
        urun_genelstok=:genelstok,
        urun_harcananstok=:harcananstok
        ");
        $insert=$stokkaydet->execute(array(
          'ad' => $_POST['urun_ad'],
          'aciklama' => $_POST['urun_aciklama'],
          'birim' => $_POST['urun_birim'],
          'fiyat' => $_POST['urun_fiyat'],
          'mevcutstok' => $_POST['urun_mevcutstok'],
          'genelstok' => $_POST['urun_genelstok'],
          'harcananstok' => $_POST['urun_harcananstok']
        ));

        if ($insert) {
          Header("Location:admin/stok.php?durum=ok");
        }
        else{
          Header("Location:admin/stok.php?durum=no");
        }
      }

      //Stok düzenleme
      if (isset($_POST['stokduzenle'])) {

        $stoksor=$db->prepare("SELECT * FROM stokmalzeme_tbl where id=:id");
        $stoksor->execute(array("id" => $_POST['id']));
        $stokcek=$stoksor->fetch(PDO::FETCH_ASSOC);

        $stokduzenle=$db->prepare("UPDATE stokmalzeme_tbl SET
          urun_ad=:ad,
          urun_aciklama=:aciklama,
          urun_birim=:birim,
          urun_fiyat=:fiyat,
          urun_mevcutstok=:mevcutstok,
          urun_genelstok=:genelstok,
          urun_harcananstok=:harcananstok
          WHERE id={$_POST['id']}
          ");
          $update=$stokduzenle->execute(array(
            'ad' => $_POST['urun_ad'],
            'aciklama' => $_POST['urun_aciklama'],
            'birim' => $_POST['urun_birim'],
            'fiyat' => $_POST['urun_fiyat'],
            'mevcutstok' => $_POST['urun_mevcutstok'],
            'genelstok' => $_POST['urun_genelstok'],
            'harcananstok' => $_POST['urun_harcananstok']
          ));

          $id=$_POST['id'];

          if ($update) {
            Header("Location:admin/stok.php?durum=ok");
          }
          else{
            Header("Location:admin/stok.php?durum=no");
          }
        }

        //Stok silme
        if($_GET['stoksil']=="ok") {

          $select = $db->prepare("SELECT * FROM stokmalzeme_tbl where id=:id");
          $select->execute(array('id' => $_GET['id']));
          $bul = $select->fetch(PDO::FETCH_ASSOC);

          $sil=$db->prepare("DELETE FROM stokmalzeme_tbl WHERE id=:id");
          $kontrol=$sil->execute(array('id' => $_GET['id']));

          if ($kontrol) {
            header("Location:admin/stok.php?durum=ok");

          } else{
            header("Location:admin/stok.php?durum=no");
          }
        }

        //Alış Ekleme
        if (isset($_POST['alisekle'])) {
          $aliskaydet=$db->prepare("INSERT INTO alisekrani_tbl SET
            alis_firmaad=:firmaad,
            alis_firmavergino=:firmavergino,
            alis_firmavergidairesi=:firmavergidairesi,
            alis_faturano=:faturano,
            alis_urunadi=:urunadi,
            alis_urunbirim=:urunbirim,
            alis_urunadedi=:urunadedi,
            alis_aciklama=:aciklama,
            alis_teslimdurumu=:teslimdurumu,
            alis_teslimalinanadet=:teslimalinanadet
            ");
            $insert=$aliskaydet->execute(array(
              'firmaad' => $_POST['alis_firmaad'],
              'firmavergino' => $_POST['alis_firmavergino'],
              'firmavergidairesi' => $_POST['alis_firmavergidairesi'],
              'faturano' => $_POST['alis_faturano'],
              'urunadi' => $_POST['alis_urunadi'],
              'urunbirim' => $_POST['alis_urunbirim'],
              'urunadedi' => $_POST['alis_urunadedi'],
              'aciklama' => $_POST['alis_aciklama'],
              'teslimdurumu' => $_POST['alis_teslimdurumu'],
              'teslimalinanadet' => $_POST['alis_teslimalinanadet']
            ));

            if ($insert) {
              Header("Location:admin/alis.php?durum=ok");
            }
            else{
              Header("Location:admin/alis.php?durum=no");
            }
          }

          //Alış düzenleme
          if (isset($_POST['alisduzenle'])) {

            $alissor=$db->prepare("SELECT * FROM alisekrani_tbl where id=:id");
            $alissor->execute(array("id" => $_POST['id']));
            $stokcek=$alissor->fetch(PDO::FETCH_ASSOC);

            $alisduzenle=$db->prepare("UPDATE alisekrani_tbl SET
              alis_firmaad=:firmaad,
              alis_firmavergino=:firmavergino,
              alis_firmavergidairesi=:firmavergidairesi,
              alis_faturano=:faturano,
              alis_urunadi=:urunadi,
              alis_urunbirim=:urunbirim,
              alis_urunadedi=:urunadedi,
              alis_aciklama=:aciklama,
              alis_teslimdurumu=:teslimdurumu,
              alis_teslimalinanadet=:teslimalinanadet
              WHERE id={$_POST['id']}
              ");
              $update=$alisduzenle->execute(array(
                'firmaad' => $_POST['alis_firmaad'],
                'firmavergino' => $_POST['alis_firmavergino'],
                'firmavergidairesi' => $_POST['alis_firmavergidairesi'],
                'faturano' => $_POST['alis_faturano'],
                'urunadi' => $_POST['alis_urunadi'],
                'urunbirim' => $_POST['alis_urunbirim'],
                'urunadedi' => $_POST['alis_urunadedi'],
                'aciklama' => $_POST['alis_aciklama'],
                'teslimdurumu' => $_POST['alis_teslimdurumu'],
                'teslimalinanadet' => $_POST['alis_teslimalinanadet']
              ));

              $id=$_POST['id'];

              if ($update) {
                Header("Location:admin/alis.php?durum=ok");
              }
              else{
                Header("Location:admin/alis.php?durum=no");
              }
            }

            //Alış silme
            if($_GET['alissil']=="ok") {

              $select = $db->prepare("SELECT * FROM alisekrani_tbl where id=:id");
              $select->execute(array('id' => $_GET['id']));
              $bul = $select->fetch(PDO::FETCH_ASSOC);

              $sil=$db->prepare("DELETE FROM alisekrani_tbl WHERE id=:id");
              $kontrol=$sil->execute(array('id' => $_GET['id']));

              if ($kontrol) {
                header("Location:admin/alis.php?durum=ok");

              } else{
                header("Location:admin/alis.php?durum=no");
              }
            }

            //Ürün Ekleme
            if (isset($_POST['urunekle'])) {
              $urunkaydet=$db->prepare("INSERT INTO satilabilirurun_tbl SET
                surun_satilacakurun=:satilacakurun,
                surun_birimbasinamaaliyet=:birimbasinamaaliyet,
                surun_saatlikortalamauretim=:saatlikortalamauretim
                ");
                $insert=$urunkaydet->execute(array(
                  'satilacakurun' => $_POST['surun_satilacakurun'],
                  'birimbasinamaaliyet' => $_POST['surun_birimbasinamaaliyet'],
                  'saatlikortalamauretim' => $_POST['surun_saatlikortalamauretim']
                ));

                if ($insert) {
                  Header("Location:admin/urun.php?durum=ok");
                }
                else{
                  Header("Location:admin/urun.php?durum=no");
                }
              }

              //Ürün düzenleme
              if (isset($_POST['urunduzenle'])) {

                $urunsor=$db->prepare("SELECT * FROM satilabilirurun_tbl where id=:id");
                $urunsor->execute(array("id" => $_POST['id']));
                $uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);

                $urunduzenle=$db->prepare("UPDATE satilabilirurun_tbl SET
                  surun_satilacakurun=:satilacakurun,
                  surun_birimbasinamaaliyet=:birimbasinamaaliyet,
                  surun_saatlikortalamauretim=:saatlikortalamauretim
                  WHERE id={$_POST['id']}
                  ");
                  $update=$urunduzenle->execute(array(
                    'satilacakurun' => $_POST['surun_satilacakurun'],
                    'birimbasinamaaliyet' => $_POST['surun_birimbasinamaaliyet'],
                    'saatlikortalamauretim' => $_POST['surun_saatlikortalamauretim']
                  ));

                  $id=$_POST['id'];

                  if ($update) {
                    Header("Location:admin/urun.php?durum=ok");
                  }
                  else{
                    Header("Location:admin/urun.php?durum=no");
                  }
                }

                //urun silme
                if($_GET['urunsil']=="ok") {

                  $select = $db->prepare("SELECT * FROM satilabilirurun_tbl where id=:id");
                  $select->execute(array('id' => $_GET['id']));
                  $bul = $select->fetch(PDO::FETCH_ASSOC);

                  $sil=$db->prepare("DELETE FROM satilabilirurun_tbl WHERE id=:id");
                  $kontrol=$sil->execute(array('id' => $_GET['id']));

                  if ($kontrol) {
                    header("Location:admin/urun.php?durum=ok");

                  } else{
                    header("Location:admin/urun.php?durum=no");
                  }
                }

                //Teklif Ekleme
                if (isset($_POST['teklifekle'])) {
                  $teklifkaydet=$db->prepare("INSERT INTO teklifekrani_tbl SET
                    teklif_firmaad=:firmaad,
                    teklif_firmavergino=:firmavergino,
                    teklif_siparistarihi=:siparistarihi,
                    teklif_satilabilirurunsecenekleri=:satilabilirurunsecenekleri,
                    teklif_urunadedi=:urunadedi,
                    teklif_kagitturu=:kagitturu,
                    teklif_baskitutari=:baskitutari,
                    teklif_lakvarmi=:lakvarmi,
                    teklif_metalizevarmi=:metalizevarmi,
                    teklif_kirimvarmi=:kirimvarmi,
                    teklif_delikvarmi=:delikvarmi,
                    teklif_iscisayisi=:iscisayisi
                    ");
                    $insert=$teklifkaydet->execute(array(
                      'firmaad' => $_POST['teklif_firmaad'],
                      'firmavergino' => $_POST['teklif_firmavergino'],
                      'siparistarihi' => $_POST['teklif_siparistarihi'],
                      'satilabilirurunsecenekleri' => $_POST['teklif_satilabilirurunsecenekleri'],
                      'urunadedi' => $_POST['teklif_urunadedi'],
                      'kagitturu' => $_POST['teklif_kagitturu'],
                      'baskitutari' => $_POST['teklif_baskitutari'],
                      'lakvarmi' => $_POST['teklif_lakvarmi'],
                      'metalizevarmi' => $_POST['teklif_metalizevarmi'],
                      'kirimvarmi' => $_POST['teklif_kirimvarmi'],
                      'delikvarmi' => $_POST['teklif_delikvarmi'],
                      'iscisayisi' => $_POST['teklif_iscisayisi']
                    ));

                    if ($insert) {
                      $id = $db->lastInsertId();
                      $kaydet=$db->prepare("INSERT INTO siparis_tbl SET
                        teklif_id=:id,
                        onay_durumu=:onay
                        ");
                        $ekle=$kaydet->execute(array(
                          'id' => $id,
                          'onay' => 0
                        ));

                        Header("Location:admin/teklif.php?durum=ok");
                      }
                      else{
                        Header("Location:admin/teklif.php?durum=no");
                      }
                    }

                    //Teklif düzenleme
                    if (isset($_POST['teklifduzenle'])) {

                      $teklifsor=$db->prepare("SELECT * FROM teklifekrani_tbl where id=:id");
                      $teklifsor->execute(array("id" => $_POST['id']));
                      $teklifcek=$teklifsor->fetch(PDO::FETCH_ASSOC);

                      $teklifduzenle=$db->prepare("UPDATE teklifekrani_tbl SET
                        teklif_firmaad=:firmaad,
                        teklif_firmavergino=:firmavergino,
                        teklif_siparistarihi=:siparistarihi,
                        teklif_satilabilirurunsecenekleri=:satilabilirurunsecenekleri,
                        teklif_urunadedi=:urunadedi,
                        teklif_kagitturu=:kagitturu,
                        teklif_baskitutari=:baskitutari,
                        teklif_lakvarmi=:lakvarmi,
                        teklif_metalizevarmi=:metalizevarmi,
                        teklif_kirimvarmi=:kirimvarmi,
                        teklif_delikvarmi=:delikvarmi,
                        teklif_iscisayisi=:iscisayisi
                        WHERE id={$_POST['id']}
                        ");
                        $update=$teklifduzenle->execute(array(
                          'firmaad' => $_POST['teklif_firmaad'],
                          'firmavergino' => $_POST['teklif_firmavergino'],
                          'siparistarihi' => $_POST['teklif_siparistarihi'],
                          'satilabilirurunsecenekleri' => $_POST['teklif_satilabilirurunsecenekleri'],
                          'urunadedi' => $_POST['teklif_urunadedi'],
                          'kagitturu' => $_POST['teklif_kagitturu'],
                          'baskitutari' => $_POST['teklif_baskitutari'],
                          'lakvarmi' => $_POST['teklif_lakvarmi'],
                          'metalizevarmi' => $_POST['teklif_metalizevarmi'],
                          'kirimvarmi' => $_POST['teklif_kirimvarmi'],
                          'delikvarmi' => $_POST['teklif_delikvarmi'],
                          'iscisayisi' => $_POST['teklif_iscisayisi']
                        ));

                        $id=$_POST['id'];

                        if ($update) {
                          Header("Location:admin/teklif.php?durum=ok");
                        }
                        else{
                          Header("Location:admin/teklif.php?durum=no");
                        }
                      }

                      //Teklif silme
                      if($_GET['teklifsil']=="ok") {

                        $select = $db->prepare("SELECT * FROM teklifekrani_tbl where id=:id");
                        $select->execute(array('id' => $_GET['id']));
                        $bul = $select->fetch(PDO::FETCH_ASSOC);

                        $sil=$db->prepare("DELETE FROM teklifekrani_tbl WHERE id=:id");
                        $kontrol=$sil->execute(array('id' => $_GET['id']));

                        if ($kontrol) {

                          $siparissil=$db->prepare("DELETE FROM siparis_tbl WHERE teklif_id=:teklif_id");
                          $kontrol=$siparissil->execute(array('teklif_id' => $_GET['id']));

                          header("Location:admin/teklif.php?durum=ok");
                        } else{
                          header("Location:admin/teklif.php?durum=no");
                        }
                      }

                      /*sipariş onaylama*/
                      if($_GET['onayla']=="ok") {

                        $select = $db->prepare("SELECT * FROM siparis_tbl where id=:id");
                        $select->execute(array('id' => $_GET['id']));
                        $bul = $select->fetch(PDO::FETCH_ASSOC);
                        $urunduzenle=$db->prepare("UPDATE siparis_tbl SET
                          onay_durumu=:onay
                          WHERE id={$_GET['id']}
                          ");
                          $update=$urunduzenle->execute(array(
                            'onay' => 1
                          ));

                          if ($update) {
                            header("Location:admin/siparis.php?durum=ok");
                          } else{
                            header("Location:admin/siparis.php?durum=no");
                          }
                        }

                        /*sipariş onay iptal etme*/
                        if($_GET['onayiptal']=="ok") {

                          $select = $db->prepare("SELECT * FROM siparis_tbl where id=:id");
                          $select->execute(array('id' => $_GET['id']));
                          $bul = $select->fetch(PDO::FETCH_ASSOC);
                          $urunduzenle=$db->prepare("UPDATE siparis_tbl SET
                            onay_durumu=:onay
                            WHERE id={$_GET['id']}
                            ");
                            $update=$urunduzenle->execute(array(
                              'onay' => 0
                            ));
                            if ($update) {
                              header("Location:admin/siparis.php?durum=ok");
                            } else{
                              header("Location:admin/siparis.php?durum=no");
                            }
                          }
                          /*Kullanici Girişi*/
                          if (isset($_POST['login'])) {

                            $kullanici_ad=$_POST['kullanici_ad'];
                            $kullanici_sifre=$_POST['kullanici_sifre'];

                            if ($kullanici_ad && $kullanici_sifre) {

                              $kullanicisor=$db->prepare("SELECT * FROM kullanici_tbl where kullanici_ad=:ad and kullanici_sifre=:sifre");
                              $kullanicisor-> execute(array(
                                'ad' => $kullanici_ad,
                                'sifre' => $kullanici_sifre
                              ));

                              echo $say=$kullanicisor->rowCount();

                              if ($say>0) {
                                $_SESSION['kullanici_ad'] = $kullanici_ad;
                                header('Location:admin/index.php');
                              } else {
                                header('Location:admin/login.php?durum=2');

                              }
                            }
                          }

                          //Kullanici Ekleme
                          if (isset($_POST['kullaniciekle'])) {

                            $uploads_dir = 'admin/assets/img/users/';

                            @$tmp_name = $_FILES['kullanici_foto']["tmp_name"];
                            @$name = $_FILES['kullanici_foto']["name"];

                            $refimgyol = 'assets/img/users/'.$name;
                            @move_uploaded_file($tmp_name, "$uploads_dir/$name");

                            $urunkaydet=$db->prepare("INSERT INTO kullanici_tbl SET
                              kullanici_ad=:ad,
                              kullanici_sifre=:sifre,
                              kullanici_zaman=:zaman,
                              kullanici_hakkinda=:hakkinda,
                              kullanici_dogumyeri=:dogumyeri,
                              kullanici_adsoyad=:adsoyad,
                              kullanici_yetki=:yetki,
                              kullanici_facebook=:facebook,
                              kullanici_twitter=:twitter,
                              kullanici_github=:github,
                              kullanici_instagram=:instagram,
                              kullanici_tel=:tel,
                              kullanici_foto=:foto
                              ");
                              $insert=$urunkaydet->execute(array(
                                'ad' => $_POST['kullanici_ad'],
                                'sifre' => $_POST['kullanici_sifre'],
                                'zaman' => $_POST['kullanici_zaman'],
                                'hakkinda' => $_POST['kullanici_hakkinda'],
                                'dogumyeri' => $_POST['kullanici_dogumyeri'],
                                'adsoyad' => $_POST['kullanici_adsoyad'],
                                'yetki' => $_POST['kullanici_yetki'],
                                'facebook' => $_POST['kullanici_facebook'],
                                'twitter' => $_POST['kullanici_twitter'],
                                'github' => $_POST['kullanici_github'],
                                'instagram' => $_POST['kullanici_instagram'],
                                'tel' => $_POST['kullanici_tel'],
                                'foto' => $refimgyol
                              ));

                              if ($insert) {
                                Header("Location:admin/kullanicilar.php?durum=ok");
                              }
                              else{
                                Header("Location:admin/kullanicilar.php?durum=no");
                              }
                            }

                            //Kullanici düzenleme
                            if (isset($_POST['kullaniciduzenle'])) {

                              $kullanicisor=$db->prepare("SELECT * FROM kullanici_tbl where kullanici_id=:kullanici_id");
                              $kullanicisor->execute(array("kullanici_id" => $_POST['kullanici_id']));
                              $kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

                              if ($_FILES['kullanici_foto']['size'] != 0) {
                                $uploads_dir = 'admin/assets/img/users/';
                                @$tmp_name = $_FILES['kullanici_foto']["tmp_name"];
                                @$name = $_FILES['kullanici_foto']["name"];
                                $refimgyol = 'assets/img/users/'.$name;
                                @move_uploaded_file($tmp_name, "$uploads_dir/$name");
                              }else {
                                $refimgyol = $kullanicicek['kullanici_foto'];
                              }

                              $kullaniciduzenle=$db->prepare("UPDATE kullanici_tbl SET
                                kullanici_ad=:ad,
                                kullanici_sifre=:sifre,
                                kullanici_zaman=:zaman,
                                kullanici_hakkinda=:hakkinda,
                                kullanici_dogumyeri=:dogumyeri,
                                kullanici_adsoyad=:adsoyad,
                                kullanici_yetki=:yetki,
                                kullanici_facebook=:facebook,
                                kullanici_twitter=:twitter,
                                kullanici_github=:github,
                                kullanici_instagram=:instagram,
                                kullanici_tel=:tel,
                                kullanici_foto=:resim
                                WHERE kullanici_id={$_POST['kullanici_id']}
                                ");
                                $update=$kullaniciduzenle->execute(array(
                                  'ad' => $_POST['kullanici_ad'],
                                  'sifre' => $_POST['kullanici_sifre'],
                                  'zaman' => $_POST['kullanici_zaman'],
                                  'hakkinda' => $_POST['kullanici_hakkinda'],
                                  'dogumyeri' => $_POST['kullanici_dogumyeri'],
                                  'adsoyad' => $_POST['kullanici_adsoyad'],
                                  'yetki' => $_POST['kullanici_yetki'],
                                  'facebook' => $_POST['kullanici_facebook'],
                                  'twitter' => $_POST['kullanici_twitter'],
                                  'github' => $_POST['kullanici_github'],
                                  'instagram' => $_POST['kullanici_instagram'],
                                  'tel' => $_POST['kullanici_tel'],
                                  'resim' => $refimgyol
                                ));

                                $kullanici_id=$_POST['kullanici_id'];

                                if ($update) {
                                  Header("Location:admin/kullanicilar.php?kullanici_id=$kullanici_id&durum=ok");
                                }
                                else{
                                  Header("Location:admin/kullanicilar.php?durum=no");
                                }
                              }

                              //Kullanici silme

                              if($_GET['kullanicisil']=="ok") {

                                $select = $db->prepare("SELECT * FROM kullanici_tbl where kullanici_id=:kullanici_id");
                                $select->execute(array('kullanici_id' => $_GET['kullanici_id']));
                                $bul = $select->fetch(PDO::FETCH_ASSOC);

                                unlink($bul['kullanici_foto']);


                                $sil=$db->prepare("DELETE FROM kullanici_tbl WHERE kullanici_id=:kullanici_id");
                                $kontrol=$sil->execute(array(
                                  'kullanici_id' => $_GET['kullanici_id']
                                ));

                                if ($kontrol) {
                                  header("Location:admin/kullanicilar.php?durum=ok");
                                } else{
                                  header("Location:admin/urunler.php?durum=no");
                                }
                              }

                              ?>
