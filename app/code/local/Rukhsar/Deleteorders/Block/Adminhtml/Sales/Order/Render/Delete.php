<?php
class Rukhsar_Deleteorders_Block_Adminhtml_Sales_Order_Render_Delete extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(Varien_Object $row){
		$getData = $row->getData();
		$message = Mage::helper('sales')->__('Do you want to delete this order?');
		$orderID = $getData['entity_id'];
      $view 	 = $this->getUrl('*/sales_order/view',array('order_id' => $orderID));
		$delete 	 = $this->getUrl('deleteorders/adminhtml_deleteorders/delete',array('order_id' => $orderID));

		$link		 = '<a href="'.$view.'">View</a>&nbsp;&nbsp;||&nbsp;&nbsp;<a href="javascript:;" onclick="deleteConfirm(\''.$message.'\', \'' . $delete . '\')">Delete</a>';
		return $link;
    }

}

?>