    <form method="post" action="javascript:return false;" name="{$component}">
      {$component}
    <div class="tableContainer">
    <table id="{$component}Grid" class="grid">
      <thead>
        <tr>
          <th>{$component|cat:"_action"|lang}</th>
		  <th>{$component|cat:"_ID"|lang}</th>
          <th>{$component|cat:"_Title"|lang}</th>
          <th>{$component|cat:"_CategoryID"|lang}</th>
          <th>{$component|cat:"_Published"|lang}</th>
          <th>{$component|cat:"_Updated"|lang}</th>
          <th>{$component|cat:"_Lang"|lang}</th>
        </tr>
      </thead>
      <tbody>
      {foreach from=$items_arr item=item}
        <tr>
          <td>
            <input type="checkbox" name="actionid_{$item.ID}" value="{$item.ID}">
          </td>
		  <td>{$item.ID}</td>
          <td>{$item.Title}</td>
          <td>{$item.CategoryID|default:"&nbsp;"}</td>
          <td>
			{if $item.Published eq "1"}{assign var="pub_ch" value="checked"}{else}{assign var="pub_ch" value=""}{/if}
			<input type="checkbox" name="published_{$item.ID}" {$pub_ch} value="1" onclick="items_publish({$item.ID},this.checked);">
		  </td>
          <td>{$item.Modified|date_format:"%d.%m.%Y %H:%M:%S"|default:"&nbsp;"}</td>
          <td>{$item.Lang}</td>
        </tr>
      {/foreach}
      </tbody>
    </table>
    <div class="gridPager"></div>
    </div>
    </form>