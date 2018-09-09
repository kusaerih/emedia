<script src="<?php echo base_url('js/jquery-3.2.1.min.js')?>"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('js/dataTables.bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js">
 </script>
    <script>
          $(document).ready(function(){
              var date_input=$('input[name="date"]'); //our date input has the name "date"
              var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
              date_input.datepicker({
                  format: 'yyyy-mm-dd',
                  container: container,
                  todayHighlight: true,
                  autoclose: true,
              })
          })
    </script>
    <script type="text/javascript">
      $(document).ready(function() 
        {
           $('#o').DataTable();
        } 
        );
    </script>

    <script type="text/javascript">
        $(document).ready(function() 
        {
          $('#t').DataTable();
        });
    </script>

</body>
</html>