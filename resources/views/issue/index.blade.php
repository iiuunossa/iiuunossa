<html> 
  <head> 
    <title>ระบบจัดการการให้บริการด้าน IT</title> 
  </head> 
  <body> 
    <h1>ระบบจัดการการให้บริการด้าน IT</h1>    
        <a href="/issue/create">+ เพิ่มการแจ้งปัญหาหรือขอรับบริการ</a> <br></br>
      
  <table> 
    <thead> 
      <tr> 
        <th style="background:#FF9797">id</th> 
        <th style="background:#FF9797">requster</th> 
        <th style="background:#FF9797">requester_detail_issue</th>
        <th style="background:#FF9797">service_begin_at</th>       
        <th style="background:#FF9797">service_end_estimated</th> 
        <th style="background:#FF9797">service_end_at</th>         
        <th style="background:#FF9797">summary_report</th>  
        <th style="background:#FF9797">service_by</th> 
        <th style="background:#FF9797">Status</th> 
     </tr> 
   </thead> 

      <tbody> 
        @foreach($issues as $issue) 
            @if($issue->id % 2 == 0) 
              <tr style="background-color:#88DDBB"> 
            @else 
              <tr style="background-color:#FFFF88"> 
            @endif 
                <td>{{$issue->id}}</td> 
                <td>{{$issue->requester}}</td> 
                <td>{{$issue->requester_detail_issue}}</td>                 
                <td>{{$issue->service_begin_at}}</td>
                <td>{{$issue->service_end_estimated}}</td> 
                <td>{{$issue->service_end_at}}</td>                
                <td>{{$issue->summary_report}}</td> 
                <td>{{$issue->service_by}}</td>
                <td><a href="/issue/{{$issue->id}}/edit">แก้ไข</a></td> 
              </tr> 
        @endforeach 
      </tbody> 
 
 
  </table> 
 
  </body> 
</html>