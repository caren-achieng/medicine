<!-- inside home section--- leave application interface -->
<div class="container nav-bar">
      <div class="containerTable">
      <h2 class="table-title">LEAVE APPLICATION</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th class="th-data" scope="col">LEAVE ID</th>
            <th class="th-data"scope="col">LEAVE TYPE</th>
            <th class="th-data" scope="col">ALLOWED PERIOD(days)</th>
            <th class="th-data" scope="col">BALANCE(days)</th>
            <th class="th-data"scope="col">APPLY/VIEW</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <th class="data" scope="row">001</th>
            <td class="data">Sick Leave</td>
            <td class="data">30</td>
            <td  class="data">12</td>
            <td class="data"> <a href=""> <button type="button" class="btn btn-success">APPLY</button> </a> </td>
          </tr>
          <tr>
            <th class="data" scope="row">002</th>
            <td class="data">Maternity Leave</td>
            <td class="data">30</td>
            <td  class="data">12</td>
            <td class="data"> <a href=""> <button type="button" class="btn btn-success">APPLY</button> </a> </td>
          </tr>
          <tr>
            <th class="data" scope="row">003</th>
            <td class="data">Paternity Leave</td>
            <td class="data">3</td>
            <td  class="data">3</td>
            <td class="data"> <a href=""> <button type="button" class="btn btn-success">APPLY</button> </a> </td>
          </tr>
          <tr>
            <th class="data" scope="row">004</th>
            <td class="data">Annual leave</td>
            <td class="data">27</td>
            <td  class="data">27</td>
            <td class="data"> <a href=""> <button type="button" class="btn btn-success">APPLY</button> </a> </td>
          </tr>
          <tr>
            <th class="data" scope="row">005</th>
            <td class="data">Compassionate Leave</td>
            <td class="data">1</td>
            <td  class="data">0</td>
            <td class="data"> <a href="<?= base_url('/leaveapplication');?>"> <button type="button" class="btn btn-success disabled">APPLY</button> </a> </td>
          </tr>
          
        </tbody>
      </table>
      
      </div>

      <div class="containerTable2">
        <h2 class="table2-title">RECENT LEAVE REQUESTS</h2>
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="th-data2" scope="col">USER-ID</th>
              <th class="th-data2"scope="col">APPLIER NAME</th>
              <th class="th-data2" scope="col">LEAVE TITLE</th>
              <th class="th-data2" scope="col">DURATION</th>
              <th class="th-data2"scope="col">DATE APPLIED</th>
              <th class="th-data2"scope="col">LEAVE STATUS</th>
  
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="data2" scope="row">00123</th>
              <td class="data2">Peter Maina</td>
              <td class="data2">Toil Leave</td>
              <td  class="data2">3 days</td>
              <td  class="data2">12/Oct/2021 13:25hrs</td>
              <td class="data2">  <button type="button" class="btn btn-warning disabled "> Pending </button> </td>
            </tr>
            
            <tr>
              <th class="data2" scope="row">00123</th>
              <td class="data2">Peter Maina</td>
              <td class="data2">Toil Leave</td>
              <td  class="data2">3 days</td>
              <td  class="data2">12/Jan/2021 13:25hrs</td>
              <td class="data2">  <button type="button" class="btn btn-success ">Approved</button> </a> </td>
            </tr>
            <tr>
              <th class="data2" scope="row">00123</th>
              <td class="data2">Peter Maina</td>
              <td class="data2">Emergency Leave</td>
              <td  class="data2">3 days</td>
              <td  class="data2">16/Apr/2020 00:25hrs</td>
              <td class="data2"> <button type="button" class="btn btn-danger "> Rejected </button> </td>
            </tr>
          </tbody>
        </table>
    </div>


    
