<?php

defined('_JEXEC') or die('Restricted access');

/**
 * Pvliveresults Candidate Model.
 *
 * @license    GNU/GPL
 */
class PvliveresultsModelCandidate extends PvliveresultsModel
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
    //public $_fields = ' * ';

    /**
     * default sort order.
     *
     * @var string
     */
    //public $_order = ' ORDER BY `order` DESC, `id` DESC ';

    /**
     * actual table name.
     *
     * @var string
     */
    public $_table = '#__pv_live_candidates';

    /**
     * table class name ref.
     *
     * @var string
     */
    public $_tableRef = 'candidate';

    /*
     * default sort order
     * @var string
     */
    //public $_where = '';

    /*
     * public key field for FK deletes
     * 
     * @var string
     */
    //public $_fk = '';
}
