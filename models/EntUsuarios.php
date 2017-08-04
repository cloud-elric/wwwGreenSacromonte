<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_usuarios".
 *
 * @property string $id_usuario
 * @property string $id_restaurante
 * @property string $id_cupon
 * @property string $txt_nombre_completo
 * @property string $txt_token
 * @property string $txt_telefono_celular
 * @property string $txt_cp
 * @property string $txt_email
 * @property string $txt_codigo
 * @property string $txt_num_empleado
 * @property string $num_edad
 * @property string $fch_registro
 * @property string $b_aceptar_terminos
 * @property string $b_participo
 * @property string $b_tiempo
 * @property string $b_gano
 *
 * @property CatCupones $idCupon
 * @property CatRestaurantes $idRestaurante
 * @property RelUsuarioPremio[] $relUsuarioPremios
 * @property CatPremios[] $idPremios
 */
class EntUsuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ent_usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_restaurante', 'id_cupon', 'txt_nombre_completo', 'txt_token', 'txt_telefono_celular', 'num_edad'], 'required'],
            [['id_restaurante', 'id_cupon', 'num_edad', 'b_aceptar_terminos', 'b_participo', 'b_tiempo', 'b_gano'], 'integer'],
            [['fch_registro'], 'safe'],
            [['txt_nombre_completo', 'txt_token'], 'string', 'max' => 150],
            [['txt_telefono_celular'], 'string', 'max' => 10],
            [['txt_cp'], 'string', 'max' => 5],
            [['txt_email', 'txt_codigo', 'txt_num_empleado'], 'string', 'max' => 50],
            [['id_cupon'], 'exist', 'skipOnError' => true, 'targetClass' => CatCupones::className(), 'targetAttribute' => ['id_cupon' => 'id_cupon']],
            [['id_restaurante'], 'exist', 'skipOnError' => true, 'targetClass' => CatRestaurantes::className(), 'targetAttribute' => ['id_restaurante' => 'id_restaurante']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_usuario' => 'Id Usuario',
            'id_restaurante' => 'Id Restaurante',
            'id_cupon' => 'Id Cupon',
            'txt_nombre_completo' => 'Txt Nombre Completo',
            'txt_token' => 'Txt Token',
            'txt_telefono_celular' => 'Txt Telefono Celular',
            'txt_cp' => 'Txt Cp',
            'txt_email' => 'Txt Email',
            'txt_codigo' => 'Txt Codigo',
            'txt_num_empleado' => 'Txt Num Empleado',
            'num_edad' => 'Num Edad',
            'fch_registro' => 'Fch Registro',
            'b_aceptar_terminos' => 'B Aceptar Terminos',
            'b_participo' => 'B Participo',
            'b_tiempo' => 'B Tiempo',
            'b_gano' => 'B Gano',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCupon()
    {
        return $this->hasOne(CatCupones::className(), ['id_cupon' => 'id_cupon']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdRestaurante()
    {
        return $this->hasOne(CatRestaurantes::className(), ['id_restaurante' => 'id_restaurante']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRelUsuarioPremios()
    {
        return $this->hasMany(RelUsuarioPremio::className(), ['id_usuario' => 'id_usuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPremios()
    {
        return $this->hasMany(CatPremios::className(), ['id_premio' => 'id_premio'])->viaTable('rel_usuario_premio', ['id_usuario' => 'id_usuario']);
    }
}
