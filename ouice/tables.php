<?php include 'inc/header.php' ?>

<div id="ou-site-header">

<!-- UNCOMMENT FOR SITE CREATIVE
<div class="ou-creative"><img src="img/creative.jpg" alt="creative" class="ou-go3"></div>
-->

</div> <!-- end ou-site-header -->

<div id="ou-site-body">

<div id="ou-page">

<div id="ou-region0">
<?php include('inc/region0a.php'); ?>

<?php include('inc/region0b.php'); ?>
</div> <!-- end ou-region0 -->

<div id="ou-region1">
<?php include('inc/region1a.php'); ?>

<div class="ou-section">

<h2>Standard table <span class="code-toggle"><a href="#"><i class="fa fa-code"></i></a></span></h2>

<pre class="code">
<code><table>
<thead>
<tr>
<th>thead 1</th>
<th>thead 2</th>
<th>thead 3</th>
</tr>
</thead>
<tfoot>
<tr>
<th>tfoot 1</th>
<th>tfoot 2</th>
<th>tfoot 3</th>
</tr>
</tfoot>
<tbody>
<tr>
<td>tbody 1a</td>
<td>tbody 2a</td>
<td>tbody 3a</td>
</tr>
<tr>
<td>tbody 1b</td>
<td>tbody 2b</td>
<td>tbody 3b</td>
</tr>
<tr>
<td>tbody 1c</td>
<td>tbody 2c</td>
<td>tbody 3c</td>
</tr>
<tr>
<td>tbody 1d</td>
<td>tbody 2d</td>
<td>tbody 3d</td>
</tr>
<tr>
<td>tbody 1e</td>
<td>tbody 2e</td>
<td>tbody 3e</td>
</tr>
</tbody>
</table></code>
</pre>

<table>
<thead>
<tr>
<th>thead 1</th>
<th>thead 2</th>
<th>thead 3</th>
</tr>
</thead>
<tfoot>
<tr>
<th>tfoot 1</th>
<th>tfoot 2</th>
<th>tfoot 3</th>
</tr>
</tfoot>
<tbody>
<tr>
<td>tbody 1a</td>
<td>tbody 2a</td>
<td>tbody 3a</td>
</tr>
<tr>
<td>tbody 1b</td>
<td>tbody 2b</td>
<td>tbody 3b</td>
</tr>
<tr>
<td>tbody 1c</td>
<td>tbody 2c</td>
<td>tbody 3c</td>
</tr>
<tr>
<td>tbody 1d</td>
<td>tbody 2d</td>
<td>tbody 3d</td>
</tr>
<tr>
<td>tbody 1e</td>
<td>tbody 2e</td>
<td>tbody 3e</td>
</tr>
</tbody>
</table>
             

</div>

<div class="ou-section">

<h2>Data table <span class="code-toggle"><a href="#"><i class="fa fa-code"></i></a></span></h2>

<pre class="code">
<code><div class="ou-table-wrap"><table summary="This table summarizes travel expenses incurred during August trips to San Jose and Seattle">
<caption>Travel Expense Report</caption>
<tbody>
<tr>
<th></th>
<th id="a2" axis="expenses">Meals</th>
<th id="a3" axis="expenses">Hotels</th>
<th id="a4" axis="expenses">Transport</th>
<th id="a5" axis="expenses">Subtotals</th>
</tr>
<tr>
<th colspan="5" id="a6" axis="location">San Jose</th>
</tr>
<tr>
    <td id="a7" axis="date">25-Aug-97</td>
    <td headers="a6 a7 a2">37.74</td>
    <td headers="a6 a7 a3">112.00</td>
    <td headers="a6 a7 a4">45.00</td>
    <td></td>
</tr>
<tr>
  <td id="a8" axis="date">26-Aug-97</td>
  <td headers="a6 a8 a2">27.28</td>
  <td headers="a6 a8 a3">112.00</td>
  <td headers="a6 a8 a4">45.00</td>
  <td></td>
</tr>
<tr>
  <td>subtotals</td>
  <td>65.02</td>
  <td>224.00</td>
  <td>90.00</td>
  <td>379.02</td>
</tr>
<tr>
  <th colspan="5" id="a10" axis="location">Seattle</th>
  </tr>
<tr>
  <td id="a11" axis="date">27-Aug-97</td>
  <td headers="a10 a11 a2">96.25</td>
  <td headers="a10 a11 a3">109.00</td>
  <td headers="a10 a11 a4">36.00</td>
  <td></td>
</tr>
<tr>
  <td id="a12" axis="date">28-Aug-97</td>
  <td headers="a10 a12 a2">35.00</td>
  <td headers="a10 a12 a3">109.00</td>
  <td headers="a10 a12 a4">36.00</td>
  <td></td>
</tr>
<tr>
  <td>subtotals</td>
  <td>131.25</td>
  <td>218.00</td>
  <td>72.00</td>
  <td>421.25</td>
</tr>
<tr>
  <th>Totals</th>
  <td>196.27</td>
  <td>442.00</td>
  <td>162.00</td>
  <td>800.27</td>
</tr>
</tbody>
</table>
</div></code>
</pre>

<p><strong>Note</strong>: for tables with a lot of data, wrap the table with <strong>div.ou-table-wrap</strong> so that mobile users can scroll to see all the info.</p>

<div class="ou-table-wrap">
<table summary="This table summarizes travel expenses
                   incurred during August trips to
                   San Jose and Seattle">
                <caption>
                Travel Expense Report
                </caption>
                <tbody><tr>
                  <th></th>
                  <th id="a2" axis="expenses">Meals</th>
                  <th id="a3" axis="expenses">Hotels</th>
                  <th id="a4" axis="expenses">Transport</th>
                  <th>Subtotals</th>
                </tr>
                <tr>
                  <th colspan="5" id="a6" axis="location">San Jose</th>
                  </tr>
                <tr>
                  <td id="a7" axis="date">25-Aug-97</td>
                  <td headers="a6 a7 a2">37.74</td>
                  <td headers="a6 a7 a3">112.00</td>
                  <td headers="a6 a7 a4">45.00</td>
                  <td></td>
                </tr>
                <tr>
                  <td id="a8" axis="date">26-Aug-97</td>
                  <td headers="a6 a8 a2">27.28</td>
                  <td headers="a6 a8 a3">112.00</td>
                  <td headers="a6 a8 a4">45.00</td>
                  <td></td>
                </tr>
                <tr>
                  <td>subtotals</td>
                  <td>65.02</td>
                  <td>224.00</td>
                  <td>90.00</td>
                  <td>379.02</td>
                </tr>
                <tr>
                  <th colspan="5" id="a10" axis="location">Seattle</th>
                  </tr>
                <tr>
                  <td id="a11" axis="date">27-Aug-97</td>
                  <td headers="a10 a11 a2">96.25</td>
                  <td headers="a10 a11 a3">109.00</td>
                  <td headers="a10 a11 a4">36.00</td>
                  <td></td>
                </tr>
                <tr>
                  <td id="a12" axis="date">28-Aug-97</td>
                  <td headers="a10 a12 a2">35.00</td>
                  <td headers="a10 a12 a3">109.00</td>
                  <td headers="a10 a12 a4">36.00</td>
                  <td></td>
                </tr>
                <tr>
                  <td>subtotals</td>
                  <td>131.25</td>
                  <td>218.00</td>
                  <td>72.00</td>
                  <td>421.25</td>
                </tr>
                <tr>
                  <th>Totals</th>
                  <td>196.27</td>
                  <td>442.00</td>
                  <td>162.00</td>
                  <td>800.27</td>
                </tr>
              </tbody></table>
</div>

</div>

<div class="ou-section">

<h2>Alternative (v4) <span class="code-toggle"><a href="#"><i class="fa fa-code"></i></a></span></h2>

<pre class="code">
<code><table class="ou-alt">
<thead>
<tr>
<th>thead 1</th>
<th>thead 2</th>
<th>thead 3</th>
</tr>
</thead>
<tbody>
<tr>
<td>tbody 1a</td>
<td>tbody 2a</td>
<td>tbody 3a</td>
</tr>
<tr>
<td>tbody 1b</td>
<td>tbody 2b</td>
<td>tbody 3b</td>
</tr>
<tr>
<td>tbody 1c</td>
<td>tbody 2c</td>
<td>tbody 3c</td>
</tr>
<tr>
<td>tbody 1d</td>
<td>tbody 2d</td>
<td>tbody 3d</td>
</tr>
<tr>
<td>tbody 1e</td>
<td>tbody 2e</td>
<td>tbody 3e</td>
</tr>
</tbody>
</table></code>
</pre>

<p>Add the class "ou-alt" to the table for an alternative colour scheme.</p>

  <table class="ou-alt">
<thead>
<tr>
<th>thead 1</th>
<th>thead 2</th>
<th>thead 3</th>
</tr>
</thead>
<tbody>
<tr>
<td>tbody 1a</td>
<td>tbody 2a</td>
<td>tbody 3a</td>
</tr>
<tr>
<td>tbody 1b</td>
<td>tbody 2b</td>
<td>tbody 3b</td>
</tr>
<tr>
<td>tbody 1c</td>
<td>tbody 2c</td>
<td>tbody 3c</td>
</tr>
<tr>
<td>tbody 1d</td>
<td>tbody 2d</td>
<td>tbody 3d</td>
</tr>
<tr>
<td>tbody 1e</td>
<td>tbody 2e</td>
<td>tbody 3e</td>
</tr>
</tbody>
</table>            

</div>

<div class="ou-section">

<h2>Plain table <span class="code-toggle"><a href="#"><i class="fa fa-code"></i></a></span></h2>

<pre class="code">
<code><table class="ou-plain">
<thead>
<tr>
<th>thead 1</th>
<th>thead 2</th>
<th>thead 3</th>
</tr>
</thead>
<tbody>
<tr>
<td>tbody 1a</td>
<td>tbody 2a</td>
<td>tbody 3a</td>
</tr>
<tr>
<td>tbody 1b</td>
<td>tbody 2b</td>
<td>tbody 3b</td>
</tr>
<tr>
<td>tbody 1c</td>
<td>tbody 2c</td>
<td>tbody 3c</td>
</tr>
<tr>
<td>tbody 1d</td>
<td>tbody 2d</td>
<td>tbody 3d</td>
</tr>
<tr>
<td>tbody 1e</td>
<td>tbody 2e</td>
<td>tbody 3e</td>
</tr>
</tbody>
</table></code>
</pre>

<table class="ou-plain">
<thead>
<tr>
<th>thead 1</th>
<th>thead 2</th>
<th>thead 3</th>
</tr>
</thead>
<tbody>
<tr>
<td>tbody 1a</td>
<td>tbody 2a</td>
<td>tbody 3a</td>
</tr>
<tr>
<td>tbody 1b</td>
<td>tbody 2b</td>
<td>tbody 3b</td>
</tr>
<tr>
<td>tbody 1c</td>
<td>tbody 2c</td>
<td>tbody 3c</td>
</tr>
<tr>
<td>tbody 1d</td>
<td>tbody 2d</td>
<td>tbody 3d</td>
</tr>
<tr>
<td>tbody 1e</td>
<td>tbody 2e</td>
<td>tbody 3e</td>
</tr>
</tbody>
</table>


</div>

<div class="ou-section">
<h2>Additional classes</h2>

<p>You can specify the column widths if you like...</p>

<ul>
<li><strong>table.ou-dist25</strong> - makes all cols 25% wide (for 4 col tables)</li>
<li><strong>table.ou-dist33</strong> - makes all cols 33% wide (for 3 col tables)</li>
<li><strong>table.ou-dist50</strong> - makes all cols 50% wide (for 2 col tables)</li>
</ul>
</div>

<?php include('inc/region1b.php'); ?>
</div> <!-- end ou-region1 -->

<div id="ou-region2">
<?php include('inc/region2a.php'); ?>

<div class="ou-full-nav">
<?php nav_fullnav(); ?>
</div>

<?php include('inc/region2b.php'); ?>
</div> <!-- end ou-region2 -->

</div> <!-- end ou-page -->

</div> <!-- end ou-site-body -->

<div id="ou-site-footer">
<?php include('inc/site-footer.php'); ?>
</div> <!-- end ou-site-footer -->

<?php include 'inc/footer.php' ?>