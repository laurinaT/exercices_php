<?php

class Voiture {
		private string $model;
		private string $marque;
		private string $motorisation;
		private float $nb_kms;
		
		public function __construct($model,$marque,$motorisation,$nb_kms) {
			$this->model=$model;
			$this->marque=$marque;
			$this->motorisation=$motorisation;
			$this->nb_kms=$nb_kms;
		}
		
		

		/**
		 * Get the value of model
		 */ 
		public function getModel()
		{
				return $this->model;
		}

		/**
		 * Set the value of model
		 *
		 * @return  self
		 */ 
		public function setModel($model)
		{
				$this->model = $model;

				return $this;
		}

		/**
		 * Get the value of marque
		 */ 
		public function getMarque()
		{
				return $this->marque;
		}

		/**
		 * Set the value of marque
		 *
		 * @return  self
		 */ 
		public function setMarque($marque)
		{
				$this->marque = $marque;

				return $this;
		}


		

		public function rouler($nb_kms_parcourus) {
			$this->nb_kms+=$nb_kms_parcourus;
		}


		/**
		 * Get the value of nb_kms
		 */ 
		public function getNb_kms()
		{
				return $this->nb_kms;
		}

		/**
		 * Set the value of nb_kms
		 *
		 * @return  self
		 */ 
		public function setNb_kms($nb_kms)
		{
				$this->nb_kms = $nb_kms;

				return $this;
		}
}




?>