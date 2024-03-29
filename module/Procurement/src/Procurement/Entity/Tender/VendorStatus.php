<?php
namespace Procurement\Entity\Tender;

use Doctrine\ORM\Mapping as Orm;

/**
 * @Orm\Entity
 * @Orm\Table(name="EP_PGD_TENDER_VENDOR_STATUS")
 * 
 * @author zakyalvan
 */
class VendorStatus {
	/**
	 * @Orm\Id
	 * @Orm\OneToOne(targetEntity="Procurement\Entity\Tender\TenderVendor", fetch="lazy", inversedBy="vendorStatus")
	 * @Orm\JoinColumns({@JoinColumn(name="KODE_TENDER", referencedColumnName="KODE_TENDER", type="string", length="50"), @JoinColumn(name="KODE_KANTOR", referencedColumnName="KODE_KANTOR", type="string", length="5"), @JoinColumn(name="KODE_VENDOR", referencedColumnName="KODE_VENDOR", type="integer")})
	 * 
	 * @var TenderVendor
	 */
	private $tenderVendor;
	public function getTenderVendor() {
		return $this->tenderVendor;
	}
	public function setTenderVendor(TenderVendor $tenderVendor) {
		$this->tenderVendor = $tenderVendor;
	}
	
	/**
	 * @Orm\Column(name="STATUS", type="integer", nullable=true)
	 */
	private $status;
	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->status = $status;
	}
	
	/**
	 * @Orm\Column(name="TEKNIKAL_STATUS", type="integer", nullable=true)
	 */
	private $statusTeknikal;
	public function setStatusTeknikal() {
		return $this->statusTeknikal;
	}
	public function setStatusTeknikal($statusTeknikal) {
		$this->statusTeknikal = $statusTeknikal;
	}
	
	/**
	 * @Orm\Column(name="KETERANGAN_TEKNIKAL", type="string", nullable=true)
	 */
	private $keteranganTeknikal;
	public function getKeteranganTeknikal() {
		return $this->keteranganTeknikal;
	}
	public function setKeteranganTeknikal($ketranganTeknikal) {
		$this->keteranganTeknikal = $ketranganTeknikal;
	}
	
	/**
	 * @Orm\Column(name="KOMERSIAL_STATUS", type="integer", nullable=true)
	 */
	private $statusKomersial;
	public function getStatusKomersial() {
		return $this->statusKomersial;
	}
	public function setStatusKomersial($statusKomersial) {
		$this->statusKomersial = $statusKomersial;
	}
	
	/**
	 * @Orm\Column(name="KETERANGAN_KOMERSIAL", type="string", nullable=true)
	 */
	private $keteranganKomersial;
	public function getKeteranganKomersial() {
		return $this->keteranganKomersial;
	}
	public function setKeteranganKomersial($keteranganKomersial) {
		$this->keteranganKomersial = $keteranganKomersial;
	}
	
	/**
	 * @Orm\Column(name="PEMENANG", type="string", length="1", nullable=true)
	 * 
	 * @var string
	 */
	private $pemenang;
	public function getPemenang() {
		return $this->pemenang;
	}
	public function isPemenang() {
		return (!is_null($this->pemenang) && $this->pemenang == '1') ? true : false;
	}
	public function setPemenang($pemenang) {
		$this->pemenang = $pemenang;
	}
	
	/**
	 * @Orm\Column(name="NEGOSIASI", type="string", length="1", nullable=true)
	 * 
	 * @var string
	 */
	private $negosiasi;
	public function getNegosiasi() {
		return $this->negosiasi;
	}
	public function setNegosiasi($negosiasi) {
		$this->negosiasi = $negosiasi;
	}
	
	/**
	 * @Orm\Column(name="TGL_REKAM", type="date", nullable=true)
	 */
	private $tanggalRekam;
	public function getTanggalRekam() {
		return $this->tanggalRekam;
	}
	public function setTanggalRekam($tanggalRekam) {
		$this->tanggalRekam = $tanggalRekam;
	}
	
	/**
	 * @Orm\Column(name="PETUGAS_REKAM", type="string", nullable=true)
	 */
	private $petugasRekam;
	public function getPetugasRekam() {
		return $this->petugasRekam;
	}
	public function setPetugasRekam($petugasRekam) {
		$this->petugasRekam = $petugasRekam;
	}
	
	/**
	 * @Orm\Column(name="TGL_UBAH", type="date", nullable=true)
	 */
	private $tanggalUbah;
	public function getTanggalUbah() {
		return $this->tanggalUbah;
	}
	public function setTanggalUbah($tanggalUbah) {
		$this->tanggalUbah = $tanggalUbah;
	}
	
	/**
	 * @Orm\Column(name="PETUGAS_UBAH", type="string", nullable=true)
	 */
	private $petugasUbah;
	public function getPetugasUbah() {
		return $this->petugasUbah;
	}
	public function setPetugasUbah($petugasUbah) {
		$this->petugasUbah = $petugasUbah;
	}
}