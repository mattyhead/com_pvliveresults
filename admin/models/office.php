<?php
defined('_JEXEC') or die('Restricted access');

/**
 * Pvliveresults Office Model.
 */
class PvliveresultsModelOffice extends PvliveresultsModel
{
    /**
     * data array.
     *
     * @var array
     */
    //public $_data;

    /**
     * default sort order.
     *
     * @var string
     */
    // default is:
    //public $_order = ' ORDER BY `order` DESC, `id` DESC ';

    /**
     * actual table name.
     *
     * @var string
     */
    public $_table = '#__pv_live_offices';

    /**
     * table class name ref.
     *
     * @var string
     */
    public $_tableRef = 'office';

    /**
     * default sort order.
     *
     * @var string
     */
    // default is:
    //public $_where = ' WHERE `published` = 1 ';

    public function publishOffices($currentElection)
    {
        $mainframe = JFactory::getApplication();
        $cid = JRequest::getVar('cid');

        foreach ($cid as $id) {
            $row = JTable::getInstance($this->tableName['s'], 'Table');
            $row->load($id);
            $row->publish($id, 1);
        }

        $mainframe->redirect('index.php?option=com_pvliveresults&controller=election&task=edit&cid[]='.$currentElection);
    }

    public function unpublishOffices($currentElection)
    {
        $mainframe = JFactory::getApplication();
        $cid = JRequest::getVar('cid');

        foreach ($cid as $id) {
            $row = JTable::getInstance($this->tableName['s'], 'Table');
            $row->load($id);
            $row->publish($id, 0);
        }

        $mainframe->redirect('index.php?option=com_pvliveresults&controller=election&task=edit&cid[]='.$currentElection);
    }
}
