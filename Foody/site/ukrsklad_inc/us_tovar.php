<?php

define('US_TOVAR_VER', 305);

define('TOVAR_CMP_NAME', 0);
define('TOVAR_CMP_KOD', 1);
define('TOVAR_CMP_NAME_KOD', 2);

class TovarName extends ArrayObject
{
    public $num = -1;
    public $name;
    public $ed_izm = 'шт.';
    public $tip;
    public $cena;
    public $visible;
    public $kod;
    public $garan;
    public $cena_r;
    public $cena_o;
    public $cena_curr_id;
    public $cena_out_curr_id;
    public $dopoln;
    public $is_usluga = 0;
    public $cena_1;
    public $cena_2;
    public $tov_fasovka;
    public $tov_upakovka_count;
    public $tov_ves;
    public $tov_length;
    public $tov_width;
    public $tov_height;
    public $tov_scancode;
    public $tov_scancode_in;
    public $is_price_invisible = 0;
    public $is_pdv = -1;
    public $kolvo_min = 0;
    public $dopoln1;
    public $dopoln2;
    public $dopoln3;
    public $cena_3;
    public $dopoln4;
    public $dopoln5;
    public $tov_descr_big;
    public $is_compl = 0;
    public $kod_ukt_zed;
    public $tov_proizv;
    public $tov_cena;

    public $im_num;
    public $kolvo;
    public $im_grupa_num;
    public $im_grupa_name;
    public $grupa_pid = 0;
    public $grupa_pid_name;
    //public $manuf;

}

class TovarNamesArr
{
    public $tovar_names = array();
    public function add($value)
    {
        $this->tovar_names[] = $value;
    }

}

class CategoryName extends ArrayObject
{
    public $num = -1;
    public $name;
    public $grupa;
    public $im_num;
    public $im_pid_num;
    public $pid_name;
    public $descr_big;
    public $full_pid_name;
    public $full_im_num;
    public $level;
}

class TovarImage extends ArrayObject
{
    public $num = -1;
    public $tov_num = -1;
    public $tov_im_num = -1;
    public $tov_image;
    public $tov_image_type;
    public $tov_image_size;
    public $isort = 0;
    public $im_num = -1;
    public $is_upload = 0;
    public $doc_type = 102;
}

class ClientName extends ArrayObject
{
    public $num = -1;
    public $fio;
    public $adr;
    public $tel;
    public $rozr_r;
    public $bank;
    public $inn;
    public $svid;
    public $k1;
    public $k2;
    public $bik;
    public $sv_ser;
    public $sv_num;
    public $sv_vidano;
    public $sv_date;
    public $pas_ser;
    public $pas_num;
    public $pas_vidano;
    public $pas_date;
    public $fio_dir;
    public $fio_buh;
    public $www;
    public $email;
    public $dopoln;
    public $tip = -10;
    public $main_pid = -10;
    public $adr_ur;
    public $znig_proc = 0;
    public $cln_scancode;
    public $dopoln_dog;
    public $dopoln1;
    public $dopoln2;
    public $dopoln3;
    public $dopoln4;
    public $cr_place;
    public $im_num = -1;
}

class Order extends ArrayObject
{
    public $num = -1;
    public $nu;
    public $date_dok;
    public $client;
    public $client_id = -1;
    public $cena = 0;
    public $cena_znig = 0;
    public $cena_pdv = 0;
    public $pdv = 0;
    public $paid = 0;
    public $is_reserv = 1;
    public $dopoln;
    public $doc_mark_type; // статусы оплаты
    public $doc_descr;
    //
    public $tov_name;
    public $tov_kod = '';
    public $tov_kolvo;
    public $tov_cena;
    public $tov_ed;
    public $tov_cena_pdv;
    public $tovar_id = -1;
    public $tov_suma;
    public $is_pdv = 0;
    //
    public $im_num = -1;
    public $im_tovar_id = -1;
    public $im_date_add = 0;
    public $im_date_mod = 0;

}