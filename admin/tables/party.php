<?php
// no direct access
defined('_JEXEC') or die;

/**
 * Parties table for PVLiveResults.
 *
 * @license    GNU/GPL
 */
class TableParty extends JTable
{
    public $id = null;
    public $name = null;
    public $ordering = null;
    public $published = null;
    public $created = null;
    public $updated = null;

    public function __construct(&$db)
    {
        parent::__construct('#__pv_live_parties', 'id', $db);
    }
}
