<?php
/**
 * Created by PhpStorm.
 * User: nonur_000
 * Date: 26.10.2017
 * Time: 02:39
 */

namespace App;


class Magaza extends \Eloquent
{
    protected $table = "magaza_bilgileri";
    protected $primaryKey = "magaza_id";
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'yetkili_id', 'magaza_adi', 'magaza_tel_no', 'magaza_adres', 'magaza_logo_link', 'magaza_link', 'magaza_faaliyet', 'magaza_vergi_dairesi', 'magaza_vergi_tc_no', 'fk_magaza_ulke_id', 'fk_magaza_il_id', 'fk_magaza_ilce_id', 'fk_magaza_sirket_tip_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'fk_kurumsal_paket_id',
    ];

}