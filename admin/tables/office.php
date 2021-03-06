<?php
// no direct access
defined('_JEXEC') or die;

/**
 * Office table for PVLiveResults.
 *
 * @license    GNU/GPL
 */
class TableOffice extends JTable
{
    public $id = null;
    public $party_id = null;
    public $name = null;
    public $ordering = null;
    public $published = null;
    public $created = null;
    public $updated = null;

    public function __construct(&$db)
    {
        parent::__construct('#__pv_live_offices', 'id', $db);
    }
}
