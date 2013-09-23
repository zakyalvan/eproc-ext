<?php
namespace Workflow\Entity;

use Doctrine\ORM\Mapping as Orm;
use Workflow\Entity\Workflow;

/**
 * @Orm\Entity
 * @Orm\Table(name="EP_WF_ARC")
 * 
 * @author zakyalvan
 */
class Arc {
	/**
	 * Konstanta type dari input arc (arc keluar dari place dan masuk ke transition).
	 */
	const ARC_DIRECTION_INPUT = 1;
	
	/**
	 * Konstanta type dari output arc (arc keluar dari transition dan masuk ke place).
	 */
	const ARC_DIRECTION_OUTPUT = 2;
	
	
	/**
	 * @Orm\ManyToOne(targetEntity="Workflow\Entity\Workflow", fetch="LAZY")
	 * @Orm\JoinColumn(name="WORKFLOW_ID", referencedColumnName="WORKFLOW_ID")
	 * 
	 * @var Workflow
	 */
	private $workflow;
	
	/**
	 * @Orm\ManyToOne(targetEntity="Workflow\Entity\Place", fetch="LAZY")
	 * @Orm\JoinColumn(name="PLACE_ID", referencedColumnName="PLACE_ID")
	 */
	private $place;
	
	/**
	 * @Orm\ManyToOne(targetEntity="Workflow\Entity\Transition", fetch="LAZY")
	 * @Orm\JoinColumn(name="TRANSITION_ID", referencedColumnName="TRANSITION_ID")
	 */
	private $transition;
	
	/**
	 * @Orm\Column(name="DIRECTION", type="integer")
	 */
	private $direction;
	
	/**
	 * @Orm\Column(name="ARC_TYPE", type="integer")
	 * 
	 * @var string
	 */
	private $type;
	
	/**
	 * Label adalah pembantu jika kondisional transition harus dipilih, workitem handler harus return label arc ini
	 * lalu flow berikutnya mengikuti label ini.
	 * Label arc ini harus unik dalam scope sebuah proses workflow. 
	 * 
	 * @Orm\Column(name="ARC_LABEL", type="string")
	 */
	private $label;
	
	/**
	 * @Orm\Column(name="TGL_REKAM")
	 */
	private $createdDate;
	
	/**
	 * @Orm\Column(name="PETUGAS_REKAM")
	 */
	private $createdBy;
	
	/**
	 * @Orm\Column(name="TGL_UBAH")
	 */
	private $updatedDate;
	
	/**
	 * @Orm\Column(name="PETUGAS_UBAH")
	 */
	private $updatedBy;
	
	
	
	public function getWorkflow() {
		return $this->workflow;
	}
	public function setWorkflow(Workflow $workflow) {
		$this->workflow = $workflow;
	}
	
	public function getPlace() {
		return $this->place;
	}
	public function setPlace(Place $place) {
		$this->place = $place;
	}
	
	public function getTransition() {
		return $this->transition;
	}
	public function setTransition(Transition $transition) {
		$this->transition = $transition;
	}
	
	public function getDirection() {
		return $this->direction;
	}
	public function setDirection($direction) {
		$this->direction = $direction;
	}
	
	public function getType() {
		return $this->type; 
	}
	public function setType($type) {
		$this->type = $type;
	}
	
	public function getLabel() {
		return $this->label;
	}
	public function setLabel($label) {
		$this->label = $label;
	}
	
	public function getCreatedDate() {
		return $this->createdDate;
	}
	public function getCreatedBy() {
		return $this->createdBy;
	}
	
	public function getUpdatedDate() {
		return $this->updatedDate;
	}
	public function getUpdatedBy() {
		return $this->updatedBy;
	}
}