<?php
namespace Contract\Service;

use Doctrine\ORM\QueryBuilder;
use Contract\Entity\Kontrak\Kontrak;
/**
 * Peyedia list kontrak harga satuan.
 * 
 * @author zakyalvan
 */
class HargaSatuanContractListProvider extends AbstractContractListProvider {
	protected function init() {
		$this->validContextDataKeys[] = 'tipeKontrak';
		
		$this->contextDatas['tipeKontrak'] = Kontrak::TIPE_HARGA_SATUAN;
	}
	protected function buildQuery(QueryBuilder $queryBuilder, $contextDatas = array(), $criterias = array()) {
		$queryBuilder->select('kontrak, vendor')
			->from('Contract\Entity\Kontrak\Kontrak', 'kontrak')
			->innerJoin('kontrak.vendor', 'vendor')
			->where($queryBuilder->expr()->andX('kontrak.tipeKontrak = :tipeKontrak'))
			->setParameter('tipeKontrak', $this->contextDatas['tipeKontrak']);
		return $queryBuilder->getQuery();
	}
}