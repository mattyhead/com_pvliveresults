<?php defined('_JEXEC') or die('Restricted access'); 


?>

<form action="index.php" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">
<div class="col100">
    <fieldset class="adminform">
        <legend><?=JText::_('DETAILS'); ?></legend>

        <table class="admintable">
        <tr>
            <td width="100" align="right" class="key">
                <label for="greeting">
                    <?=JText::_('ELECTION'); ?>:
                </label>
            </td>
            <td>
                <input class="text_area" type="text" name="election" id="election" size="32" maxlength="250" value="<?php echo $this->hello->greeting;?>" />
            </td>
        </tr>
        <tr>
            <td width="100" align="right" class="key">
                <label for="greeting">
                    <?=JText::_('EXCLUDE HEADER ROW'); ?>:
                </label>
            </td>
            <td>
                <input class="text_area" type="checkbox" name="header" value="Include" checked=checked> <sup>1</sup>
            </td>
        </tr>
        <tr>
            <td width="100" align="right" class="key">
                <label for="greeting">
                    <?=JText::_('FILE'); ?>:
                </label>
            </td>
            <td>
                <input type="file" name="fileToUpload" id="fileToUpload"> <sup>2</sup>
            </td>
        </tr>
    </table>
<p><sup>1</sup><?=JText::_('FIRST ROW WARNING')?></p>
<p><sup>2</sup><?=JText::_('FILE FORMAT WARNING')?></p>
    </fieldset>

</div>
<div class="clr"></div>

<input type="hidden" name="option" value="com_pvliveresults" />
<input type="hidden" name="id" value="" />
<input type="hidden" name="task" value="save" />
<input type="hidden" name="controller" value="election" />
<?php echo JHTML::_('form.token');?>
</form>
