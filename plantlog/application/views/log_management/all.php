<?php echo $header; ?>

<div class="container main">

  <h1>Log Management</h1>
  <div class="alert alert-warning"><strong>This is just a Prototype!</strong>  All entries here are hardcoded.  You can try sorting the values by clicking the Column name!</div>

  <table id="example" class="table table-striped table-bordered sortable" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Group</th>
        <th>Activity</th>
        <th>Description</th>
        <th>Status</th>
        <th>Selections</th>
        <th>Unit</th>
        <th>Absolute Range</th>
        <th>Optimal Range</th>
        <th>Due Date</th>
        <th>Manager's Note</th>
        <th>Employee's Note</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Chiller</td>
        <td>Evap Saturation Temp</td>
        <td>Activity Description Here</td>
        <td><font color="green">Done</font></td>
        <td></td>
        <td>Degrees</td>
        <td>25-30</td>
        <td>20-30</td>
        <td>2016-08-25</td>
        <td><i>Please do this ASAP</i></td>
        <td><i>The temperature is within optimal range: <b>28</b> Degrees</i></td>        
      </tr>
      <tr>
        <td>Chiller</td>
        <td>Cond Return Liquid Temp</td>
        <td>Activity Description Here</td>
        <td><font color="blue">Pending</font></td>
        <td></td>
        <td>Degrees</td>
        <td>10-20</td>
        <td>10-12</td>
        <td>Daily</td>
        <td><i>Monitor everyday</i></td>
        <td><i>Checking is on going</td>        
      </tr>
      <tr>
        <td>Chiller</td>
        <td>Cond Leaving Liquid Temp</td>
        <td>Activity Description Here</td>
        <td><font color="blue">Pending</font></td>
        <td></td>
        <td>Degrees</td>
        <td>10-20</td>
        <td>10-12</td>
        <td>Daily</td>
        <td><i>Monitor everyday</i></td>
        <td><i>Checking is on going</td>        
      </tr>

      <tr>
        <td>Chiller</td>
        <td>Cond Saturation Liquid Temp</td>
        <td>Activity Description Here</td>
        <td><font color="blue">Pending</font></td>
        <td></td>
        <td>Degrees</td>
        <td>10-20</td>
        <td>10-12</td>
        <td>Daily</td>
        <td><i>Monitor everyday</i></td>
        <td><i>Checking is on going</td>        
      </tr>
      <tr>
        <td>Pump</td>
        <td>Check Water Level Volume</td>
        <td>Water level should be below 10 Liters/td>
        <td><font color="blue">Pending</font></td>
        <td>Liter</td>
        <td></td>
        <td>9.8-10</td>
        <td>9.9-10</td>
        <td>Weekly</td>
        <td><i></i></td>
        <td><i></td>        
      </tr>
      <tr>
        <td>Electrical</td>
        <td>Monitor Output Voltage</td>
        <td>Activity Description Here</td>
        <td><font color="blue">Pending</font></td>
        <td>Voltage</td>
        <td></td>
        <td></td>
        <td></td>
        <td>Weekly</td>
        <td><i></i></td>
        <td><i></td>        
      </tr>
      
      <tr>
        <td>Pump</td>
        <td>Oil Seal Leakage</td>
        <td>Activity Description here</td>
        <td><font color="green">Done</font></td>
        <td></td>
        <td>Full, 1/2, 1/4, Empty</td>
        <td></td>
        <td></td>
        <td>Weekly</td>
        <td><i></i></td>
        <td><i></td>        
      </tr>

      <tr>
        <td>Pump</td>
        <td>Oil Level</td>
        <td>Activity Description here</td>
        <td><font color="green">Done</font></td>
        <td></td>
        <td>Okay, <font color="red">Not Okay</td><font></td>
        <td></td>
        <td></td>
        <td>Weekly</td>
        <td><i></i></td>
        <td><i>Oil reading is ok</td>        
      </tr>
    </tbody>
  </table>
</div>
<?php echo $footer; ?>