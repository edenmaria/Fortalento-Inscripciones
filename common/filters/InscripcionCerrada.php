<?php
namespace common\filters;

use Yii;
use yii\base\ActionFilter;
use common\models\Estudiantes;
use common\models\Inscripciones;


class InscripcionCerrada extends ActionFilter
{
    private $_startTime;
    public $denyActions = [];
    public $returnPath = '';

    public function beforeAction($action)
    {
		if (($estudiante = Estudiantes::getEstudianteUser()))
        {
			if (($inscripcion = $estudiante->getInscripcion()))
			{
				if ($inscripcion->estatusInscripcion() && in_array($action->uniqueId, $this->denyActions))
				{
					//Yii::info("Denegado '{$action->uniqueId}'");
					return Yii::$app->getResponse()->redirect(array($this->returnPath));			
				}
			}
		}
        
        return parent::beforeAction($action);
    }

    public function afterAction($action, $result)
    {
        /*$time = microtime(true) - $this->_startTime;
        Yii::info("Action '{$action->uniqueId}' spent $time second.");*/
        return parent::afterAction($action, $result);
    }
}
?>
