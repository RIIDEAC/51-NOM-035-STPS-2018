<?php
namespace app\models\nom035;
/**
 * 
 */
class ResultadosFRPS
{
	
	private $_db,
			$_dbResObj,
			$_dbResCount,
			$_frps;
	
	public function __construct
	(
		\app\models\database\DBGet $DBGet,
		\app\models\database\DBResultFirst $DBResultFirst,
		\app\models\database\DBResultCount $DBResultCount
	)
	{
		$this->_db = $DBGet;
		$this->_dbResObj = $DBResultFirst;
		$this->_dbResCount = $DBResultCount;
	}

	public function getData($usu_id = null)
	{
		$frps = $this->_db->get(
			array(
				'table' => 'DAT_FRPS_FRPS', 
				'limit' =>  1, 
				//'orderby' => '', 
				//'order' => '', 
				'where' => array('USU_ID','=', $usu_id),
				//'and' => array('', '', '')
				), 
			array(
				'*'
				)
		);

		if($this->_dbResCount->getCount($frps) !== 0)
		{
			$frps = $this->_dbResObj->getFirstObj($frps);

			//Buscamos en la segunda FRPS

			$frpsii = $this->_db->get(
			array(
				'table' => 'DAT_FRPSII_FRPSII', 
				'limit' =>  1, 
				//'orderby' => '', 
				//'order' => '', 
				'where' => array('USU_ID','=', $usu_id),
				//'and' => array('', '', '')
				), 
			array(
				'*'
				)
			);

			if($this->_dbResCount->getCount($frpsii) !== 0)
			{
				$frpsii = $this->_dbResObj->getFirstObj($frpsii);

				$frps = (object) array_merge((array) $frps, (array) $frpsii);

				$frpsiii = $this->_db->get(
				array(
					'table' => 'DAT_FRPSIII_FRPSIII', 
					'limit' =>  1, 
					//'orderby' => '', 
					//'order' => '', 
					'where' => array('USU_ID','=', $usu_id),
					//'and' => array('', '', '')
					), 
				array(
					'*'
					)
				);

				if($this->_dbResCount->getCount($frpsiii) !== 0)
				{
					$frpsiii = $this->_dbResObj->getFirstObj($frpsiii);

					$frpsCompleta = (object) array_merge((array) $frps, (array) $frpsiii);
				}
			}

			if(isset($frpsCompleta))
			{
				$this->_frps = $frpsCompleta;
				return true;
			}
			else
			{
				return false;
			}			
		}
		else
		{
			return false;
		}
	}

// CATEGORIA - AMBIENTE DE TRABAJO

	//DOMINIO - Condiciones en el ambiente de trabajo

	public function CondicionesPeligrosasInseguras()
	{
		return $this->_frps->RPS_L_1 + $this->_frps->RPS_L_3;
	}

	public function CondicionesDeficientesInsalubres()
	{
		return $this->_frps->RPS_L_2 + $this->_frps->RPS_L_4;
	}

	public function TrabajosPeligrosos()
	{
		return $this->_frps->RPS_L_5;
	}

//CATEGORIA - Factores propios de la actividad

	// DOMINIO Carga de trabajo

	public function CargasCuantitativas()
	{
		return $this->_frps->RPS_L_6 + $this->_frps->RPS_L_12;
	}

	public function RitmosdeTrabajoAcelerado()
	{
		return $this->_frps->RPS_L_7 + $this->_frps->RPS_L_8;
	}

	public function CargaMental()
	{
		return $this->_frps->RPS_L_9 + $this->_frps->RPS_L_10 + $this->_frps->RPS_L_11;
	}

	public function CargasPsicologicasEmocionales()
	{
		return $this->_frps->RPS_L_65 + $this->_frps->RPS_L_66 + $this->_frps->RPS_L_67 + $this->_frps->RPS_L_68;
	}

	public function CargasdeAltaResponsabilidad()
	{
		return $this->_frps->RPS_L_13 + $this->_frps->RPS_L_14;
	}

	public function CargasContradictorias()
	{
		return $this->_frps->RPS_L_15 + $this->_frps->RPS_L_16;
	}

	//DOMINIO - FALTA DE CONTROL SOBRE EL TRABAJO

	public function FaltadeControlyAutonomia()
	{
		return $this->_frps->RPS_L_25 + $this->_frps->RPS_L_26 + $this->_frps->RPS_L_27 + $this->_frps->RPS_L_28;
	}

	public function LimitadaNulaPosibilidadDesarrollo()
	{
		return $this->_frps->RPS_L_23 + $this->_frps->RPS_L_24;
	}

	public function InsuficienteParticipacionManejo()
	{
		return $this->_frps->RPS_L_29 + $this->_frps->RPS_L_30;
	}

	public function LimitadaInexistenteCapacitacion()
	{
		return $this->_frps->RPS_L_35 + $this->_frps->RPS_L_36;
	}
//CATEGORIA - Organización del tiempo de trabajo

	//DOMINIO - JORNADA DE TRABAJO

	public function JornadasTrabajoExtensas()
	{
		return $this->_frps->RPS_L_17 + $this->_frps->RPS_L_18;
	}

	//DOMINIO - Interferencia en la relación trabajo-familia

	public function InfluenciaTrabajoFueraCentro()
	{
		return $this->_frps->RPS_L_19 + $this->_frps->RPS_L_20;
	}

	public function InfluenciaResponsabilidades()
	{
		return $this->_frps->RPS_L_21 + $this->_frps->RPS_L_22;
	}

// CATEGORIA - Liderazgo y relaciones en el trabajo

	//DOMINIO - Liderazgo

	public function EscazaClaridadFunciones()
	{
		return $this->_frps->RPS_L_31 + $this->_frps->RPS_L_32 + $this->_frps->RPS_L_33 + $this->_frps->RPS_L_34;
	}

	public function CaracteristicasLiderazgo()
	{
		return $this->_frps->RPS_L_37 + $this->_frps->RPS_L_38 + $this->_frps->RPS_L_39 + $this->_frps->RPS_L_40 + $this->_frps->RPS_L_41;
	}

	//DOMINIO - Relaciones en el trabajo

	public function RelacionesSocialesTrabajo()
	{
		return $this->_frps->RPS_L_42 + $this->_frps->RPS_L_43 + $this->_frps->RPS_L_44 + $this->_frps->RPS_L_45 + $this->_frps->RPS_L_46;
	}

	public function DeficienteRelacionColaboradores()
	{
		return $this->_frps->RPS_L_69 + $this->_frps->RPS_L_70 + $this->_frps->RPS_L_71 + $this->_frps->RPS_L_72;
	}

	//DOMINIO - Violencia

	public function ViolenciaLaboral()
	{
		return $this->_frps->RPS_L_57 + $this->_frps->RPS_L_58 + $this->_frps->RPS_L_59 + $this->_frps->RPS_L_60 + $this->_frps->RPS_L_61 + $this->_frps->RPS_L_62 + $this->_frps->RPS_L_63 + $this->_frps->RPS_L_64;
	}

// CATEGORIA - Entorno organizacional

	//DOMINIO - Reconocimiento del desempeño

	public function EscasaRetroalimentacion()
	{
		return $this->_frps->RPS_L_47 + $this->_frps->RPS_L_48;
	}

	public function EscasoReconocimiento()
	{
		return $this->_frps->RPS_L_49 + $this->_frps->RPS_L_50 + $this->_frps->RPS_L_51 + $this->_frps->RPS_L_52;
	}

	//DOMINIO - Insuficiente sentido de pertenencia e, inestabilidad

	public function LimitadoSentidoPertenencia()
	{
		return $this->_frps->RPS_L_55 + $this->_frps->RPS_L_56;
	}

	public function InestabilidadLaboral()
	{
		return $this->_frps->RPS_L_53 + $this->_frps->RPS_L_54;
	}

/*
*		TOTALES
*/

/*
*		POR DOMINIO
*/
	// Condiciones en el ambiente de trabajo - TOTAL

	public function AmbienteTrabajo()
	{
		return $this->CondicionesPeligrosasInseguras() + $this->CondicionesDeficientesInsalubres() + $this->TrabajosPeligrosos();
	}

	public function RiesgoDominioAmbienteTrabajo()
	{
		if($this->AmbienteTrabajo() < 5)
		{
			return 'Nulo o despreciable';
		}
		if($this->AmbienteTrabajo() >= 5 && $this->AmbienteTrabajo() < 9)
		{
			return 'Bajo';
		}
		if($this->AmbienteTrabajo() >= 9 && $this->AmbienteTrabajo() < 11)
		{
			return 'Medio';
		}
		if($this->AmbienteTrabajo() >= 11 && $this->AmbienteTrabajo() < 14)
		{
			return 'Alto';
		}
		if($this->AmbienteTrabajo() >= 14)
		{
			return 'Muy alto';
		}
	}

	//Carga de trabajo

	public function CargaTrabajo()
	{
		return $this->CargasCuantitativas() + $this->RitmosdeTrabajoAcelerado() + $this->CargaMental() + $this->CargasPsicologicasEmocionales() + $this->CargasdeAltaResponsabilidad() + $this->CargasContradictorias();
	}

	public function RiesgoCargaTrabajo()
	{
		if($this->CargaTrabajo() < 15)
		{
			return 'Nulo o despreciable';
		}
		if($this->CargaTrabajo() >= 15 && $this->CargaTrabajo() < 21)
		{
			return 'Bajo';
		}
		if($this->CargaTrabajo() >= 21 && $this->CargaTrabajo() < 27)
		{
			return 'Medio';
		}
		if($this->CargaTrabajo() >= 27 && $this->CargaTrabajo() < 37)
		{
			return 'Alto';
		}
		if($this->CargaTrabajo() >= 37)
		{
			return 'Muy alto';
		}
	}

	//Falta de control sobre el trabajo

	public function FaltaControl()
	{
		return $this->FaltadeControlyAutonomia() + $this->LimitadaNulaPosibilidadDesarrollo() + $this->InsuficienteParticipacionManejo() + $this->LimitadaInexistenteCapacitacion();
	}

	public function RiesgoFaltaControl()
	{
		if($this->FaltaControl() < 11)
		{
			return 'Nulo o despreciable';
		}
		if($this->FaltaControl() >= 11 && $this->FaltaControl() < 16)
		{
			return 'Bajo';
		}
		if($this->FaltaControl() >= 16 && $this->FaltaControl() < 21)
		{
			return 'Medio';
		}
		if($this->FaltaControl() >= 21 && $this->FaltaControl() < 25)
		{
			return 'Alto';
		}
		if($this->FaltaControl() >= 25)
		{
			return 'Muy alto';
		}
	}

	//Jornada de trabajo

	public function JornadaTrabajo()
	{
		return $this->JornadasTrabajoExtensas();
	}

	public function RiesgoJornadaTrabajo()
	{
		if($this->JornadaTrabajo() < 1)
		{
			return 'Nulo o despreciable';
		}
		if($this->JornadaTrabajo() >= 1 && $this->JornadaTrabajo() < 2)
		{
			return 'Bajo';
		}
		if($this->JornadaTrabajo() >= 2 && $this->JornadaTrabajo() < 4)
		{
			return 'Medio';
		}
		if($this->JornadaTrabajo() >= 4 && $this->JornadaTrabajo() < 6)
		{
			return 'Alto';
		}
		if($this->JornadaTrabajo() >= 6)
		{
			return 'Muy alto';
		}
	}

	//Interferencia en la relación trabajo-familia

	public function InterferenciaRelacionTrabajoFamilia()
	{
		return $this->InfluenciaTrabajoFueraCentro() + $this->InfluenciaResponsabilidades();
	}

	public function RiesgoInterferenciaRelacionTrabajoFamilia()
	{
		if($this->InterferenciaRelacionTrabajoFamilia() < 4)
		{
			return 'Nulo o despreciable';
		}
		if($this->InterferenciaRelacionTrabajoFamilia() >= 4 && $this->InterferenciaRelacionTrabajoFamilia() < 6)
		{
			return 'Bajo';
		}
		if($this->InterferenciaRelacionTrabajoFamilia() >= 6 && $this->InterferenciaRelacionTrabajoFamilia() < 8)
		{
			return 'Medio';
		}
		if($this->InterferenciaRelacionTrabajoFamilia() >= 8 && $this->InterferenciaRelacionTrabajoFamilia() < 10)
		{
			return 'Alto';
		}
		if($this->InterferenciaRelacionTrabajoFamilia() >= 10)
		{
			return 'Muy alto';
		}
	}

	//Liderazgo

	public function Liderazgo()
	{
		return $this->EscazaClaridadFunciones() + $this->CaracteristicasLiderazgo();
	}

	public function RiesgoLiderazgo()
	{
		if($this->Liderazgo() < 9)
		{
			return 'Nulo o despreciable';
		}
		if($this->Liderazgo() >= 9 && $this->Liderazgo() < 12)
		{
			return 'Bajo';
		}
		if($this->Liderazgo() >= 12 && $this->Liderazgo() < 16)
		{
			return 'Medio';
		}
		if($this->Liderazgo() >= 16 && $this->Liderazgo() < 20)
		{
			return 'Alto';
		}
		if($this->Liderazgo() >= 20)
		{
			return 'Muy alto';
		}
	}

	// Relaciones en el trabajo

	public function RelacionesTrabajo()
	{
		return $this->RelacionesSocialesTrabajo() + $this->DeficienteRelacionColaboradores();
	}

	public function RiesgoRelacionesTrabajo()
	{
		if($this->RelacionesTrabajo() < 10)
		{
			return 'Nulo o despreciable';
		}
		if($this->RelacionesTrabajo() >= 10 && $this->RelacionesTrabajo() < 13)
		{
			return 'Bajo';
		}
		if($this->RelacionesTrabajo() >= 13 && $this->RelacionesTrabajo() < 17)
		{
			return 'Medio';
		}
		if($this->RelacionesTrabajo() >= 17 && $this->RelacionesTrabajo() < 21)
		{
			return 'Alto';
		}
		if($this->RelacionesTrabajo() >= 21)
		{
			return 'Muy alto';
		}
	}

	//Violencia

	public function Violencia()
	{
		return $this->ViolenciaLaboral();
	}

	public function RiesgoViolencia()
	{
		if($this->Violencia() < 7)
		{
			return 'Nulo o despreciable';
		}
		if($this->Violencia() >= 7 && $this->Violencia() < 10)
		{
			return 'Bajo';
		}
		if($this->Violencia() >= 10 && $this->Violencia() < 13)
		{
			return 'Medio';
		}
		if($this->Violencia() >= 13 && $this->Violencia() < 16)
		{
			return 'Alto';
		}
		if($this->Violencia() >= 16)
		{
			return 'Muy alto';
		}
	}

	//Reconocimiento del desempeño

	public function ReconocimientoDesempeno()
	{
		return $this->EscasaRetroalimentacion() + $this->EscasoReconocimiento();
	}

	public function RiesgoReconocimientoDesempeno()
	{
		if($this->ReconocimientoDesempeno() < 6)
		{
			return 'Nulo o despreciable';
		}
		if($this->ReconocimientoDesempeno() >= 6 && $this->ReconocimientoDesempeno() < 10)
		{
			return 'Bajo';
		}
		if($this->ReconocimientoDesempeno() >= 10 && $this->ReconocimientoDesempeno() < 14)
		{
			return 'Medio';
		}
		if($this->ReconocimientoDesempeno() >= 14 && $this->ReconocimientoDesempeno() < 18)
		{
			return 'Alto';
		}
		if($this->ReconocimientoDesempeno() >= 18)
		{
			return 'Muy alto';
		}
	}

	//Insuficiente sentido de pertenencia e, inestabilidad

	public function InsuficienteSentidoPertenencia()
	{
		return $this->LimitadoSentidoPertenencia() + $this->InestabilidadLaboral();
	}

	public function RiesgoInsuficienteSentidoPertenencia()
	{
		if($this->InsuficienteSentidoPertenencia() < 4)
		{
			return 'Nulo o despreciable';
		}
		if($this->InsuficienteSentidoPertenencia() >= 4 && $this->InsuficienteSentidoPertenencia() < 6)
		{
			return 'Bajo';
		}
		if($this->InsuficienteSentidoPertenencia() >= 6 && $this->InsuficienteSentidoPertenencia() < 8)
		{
			return 'Medio';
		}
		if($this->InsuficienteSentidoPertenencia() >= 8 && $this->InsuficienteSentidoPertenencia() < 10)
		{
			return 'Alto';
		}
		if($this->InsuficienteSentidoPertenencia() >= 10)
		{
			return 'Muy alto';
		}
	}

/*
*	TOTALES POR CATEGORIA
*/	

// AMBIENTE EN EL TRABAJO

	public function TotalAmbienteTrabajo()
	{
		return $this->AmbienteTrabajo();
	}

	public function RiesgoAmbienteTrabajo()
	{
		if($this->TotalAmbienteTrabajo() < 5)
		{
			return 'Nulo o despreciable';
		}
		if($this->TotalAmbienteTrabajo() >= 5 && $this->TotalAmbienteTrabajo() < 9)
		{
			return 'Bajo';
		}
		if($this->TotalAmbienteTrabajo() >= 9 && $this->TotalAmbienteTrabajo() < 11)
		{
			return 'Medio';
		}
		if($this->TotalAmbienteTrabajo() >= 11 && $this->TotalAmbienteTrabajo() < 14)
		{
			return 'Alto';
		}
		if($this->TotalAmbienteTrabajo() >= 14)
		{
			return 'Muy alto';
		}
	}

// Factores propios de la actividad

	public function TotalFactoresPropiosActividad()
	{
		return $this->CargaTrabajo() + $this->FaltaControl();
	}

	public function RiesgoFactoresPropiosActividad()
	{
		if($this->TotalFactoresPropiosActividad() < 15)
		{
			return 'Nulo o despreciable';
		}
		if($this->TotalFactoresPropiosActividad() >= 15 && $this->TotalFactoresPropiosActividad() < 30)
		{
			return 'Bajo';
		}
		if($this->TotalFactoresPropiosActividad() >= 30 && $this->TotalFactoresPropiosActividad() < 45)
		{
			return 'Medio';
		}
		if($this->TotalFactoresPropiosActividad() >= 45 && $this->TotalFactoresPropiosActividad() < 60)
		{
			return 'Alto';
		}
		if($this->TotalFactoresPropiosActividad() >= 60)
		{
			return 'Muy alto';
		}
	}

// Organización del tiempo de trabajo

	public function TotalOrganizacionTrabajo()
	{
		return $this->JornadaTrabajo() + $this->InterferenciaRelacionTrabajoFamilia();
	}

	public function RiesgoOrganizacionTrabajo()
	{
		if($this->TotalOrganizacionTrabajo() < 5)
		{
			return 'Nulo o despreciable';
		}
		if($this->TotalOrganizacionTrabajo() >= 5 && $this->TotalOrganizacionTrabajo() < 7)
		{
			return 'Bajo';
		}
		if($this->TotalOrganizacionTrabajo() >= 7 && $this->TotalOrganizacionTrabajo() < 10)
		{
			return 'Medio';
		}
		if($this->TotalOrganizacionTrabajo() >= 10 && $this->TotalOrganizacionTrabajo() < 13)
		{
			return 'Alto';
		}
		if($this->TotalOrganizacionTrabajo() >= 13)
		{
			return 'Muy alto';
		}
	}

// Liderazgo y relaciones en el trabajo

	public function TotalLiderazgoRelacionesTrabajo()
	{
		return $this->Liderazgo() + $this->RelacionesTrabajo() + $this->Violencia();
	}

	public function RiesgoLiderazgoRelacionesTrabajo()
	{
		if($this->TotalLiderazgoRelacionesTrabajo() < 14)
		{
			return 'Nulo o despreciable';
		}
		if($this->TotalLiderazgoRelacionesTrabajo() >= 14 && $this->TotalLiderazgoRelacionesTrabajo() < 29)
		{
			return 'Bajo';
		}
		if($this->TotalLiderazgoRelacionesTrabajo() >= 29 && $this->TotalLiderazgoRelacionesTrabajo() < 42)
		{
			return 'Medio';
		}
		if($this->TotalLiderazgoRelacionesTrabajo() >= 42 && $this->TotalLiderazgoRelacionesTrabajo() < 58)
		{
			return 'Alto';
		}
		if($this->TotalLiderazgoRelacionesTrabajo() >= 58)
		{
			return 'Muy alto';
		}
	}

// Entorno organizacional

	public function TotalEntornoOrganizacional()
	{
		return $this->ReconocimientoDesempeno() + $this->InsuficienteSentidoPertenencia();
	}

	public function RiesgoEntornoOrganizacional()
	{
		if($this->TotalEntornoOrganizacional() < 10)
		{
			return 'Nulo o despreciable';
		}
		if($this->TotalEntornoOrganizacional() >= 10 && $this->TotalEntornoOrganizacional() < 14)
		{
			return 'Bajo';
		}
		if($this->TotalEntornoOrganizacional() >= 14 && $this->TotalEntornoOrganizacional() < 18)
		{
			return 'Medio';
		}
		if($this->TotalEntornoOrganizacional() >= 18 && $this->TotalEntornoOrganizacional() < 23)
		{
			return 'Alto';
		}
		if($this->TotalEntornoOrganizacional() >= 23)
		{
			return 'Muy alto';
		}
	}


//TOTAL

	public function Total()
	{
		$total = $this->_frps;
		unset($total->FRPS_ID);
		unset($total->USU_ID);
		unset($total->FRPSII_ID);
		unset($total->FRPSII);
		unset($total->FRPSIII_ID);
		unset($total->FRPSIII);

		$riesgo = 0;

		foreach ($total as $key => $value)
		{
			$riesgo = $riesgo + $value;
		}

		return $riesgo;
	}

	public function RiesgoTotal()
	{
		if($this->Total() < 50)
		{
			return 'Nulo o despreciable';
		}
		if($this->Total() >= 50 && $this->Total() < 75)
		{
			return 'Bajo';
		}
		if($this->Total() >= 75 && $this->Total() < 99)
		{
			return 'Medio';
		}
		if($this->Total() >= 99 && $this->Total() < 140)
		{
			return 'Alto';
		}
		if($this->Total() >= 140)
		{
			return 'Muy alto';
		}
	}

	public function ResultadosTotales()
	{
		$resultados = array(
			'Total' => 
					array(
						'Resultado' => $this->Total(),
						'Riesgo' => $this->RiesgoTotal()
					),
			'Categoria' => 
			array(
				'Ambiente de trabajo' => 
					array(
						'Resultado' => $this->TotalAmbienteTrabajo(),
						'Riesgo' => $this->RiesgoAmbienteTrabajo()
					),
				'Factores propios de la actividad' => 
					array(
						'Resultado' => $this->TotalFactoresPropiosActividad(),
						'Riesgo' => $this->RiesgoFactoresPropiosActividad()
					),
				'Organización del tiempo de trabajo' => 
					array(
						'Resultado' => $this->TotalOrganizacionTrabajo(),
						'Riesgo' => $this->RiesgoOrganizacionTrabajo()
					),
				'Liderazgo y relaciones en el trabajo' => 
					array(
						'Resultado' => $this->TotalLiderazgoRelacionesTrabajo(),
						'Riesgo' => $this->RiesgoLiderazgoRelacionesTrabajo()
					),
				'Entorno organizacional' => 
					array(
						'Resultado' => $this->TotalEntornoOrganizacional(),
						'Riesgo' => $this->RiesgoEntornoOrganizacional()
					),
			),
			'Dominio' =>
			array(
				'Condiciones en el ambiente de trabajo' =>
					array(
						'Resultado' => $this->AmbienteTrabajo(),
						'Riesgo' => $this->RiesgoDominioAmbienteTrabajo()
					),
				'Carga de trabajo' =>
					array(
						'Resultado' => $this->CargaTrabajo(),
						'Riesgo' => $this->RiesgoCargaTrabajo()
					),
				'Falta de control sobre el trabajo' =>
					array(
						'Resultado' => $this->FaltaControl(),
						'Riesgo' => $this->RiesgoFaltaControl()
					),
				'Jornada de trabajo' =>
					array(
						'Resultado' => $this->JornadaTrabajo(),
						'Riesgo' => $this->RiesgoJornadaTrabajo()
					),
				'Interferencia en la relación trabajo-familia' =>
					array(
						'Resultado' => $this->InterferenciaRelacionTrabajoFamilia(),
						'Riesgo' => $this->RiesgoInterferenciaRelacionTrabajoFamilia()
					),
				'Liderazgo' =>
					array(
						'Resultado' => $this->Liderazgo(),
						'Riesgo' => $this->RiesgoLiderazgo()
					),
				'Relaciones en el trabajo' =>
					array(
						'Resultado' => $this->RelacionesTrabajo(),
						'Riesgo' => $this->RiesgoRelacionesTrabajo()
					),
				'Violencia' =>
					array(
						'Resultado' => $this->Violencia(),
						'Riesgo' => $this->RiesgoViolencia()
					),
				'Reconocimiento del desempeño' =>
					array(
						'Resultado' => $this->ReconocimientoDesempeno(),
						'Riesgo' => $this->RiesgoReconocimientoDesempeno()
					),
				'Insuficiente sentido de pertenencia e, inestabilidad' =>
					array(
						'Resultado' => $this->InsuficienteSentidoPertenencia(),
						'Riesgo' => $this->RiesgoInsuficienteSentidoPertenencia()
					),
			)
		);

		if(is_numeric($resultados['Total']['Resultado']))
		{
			return $resultados;
		}

		return false;
	}
}