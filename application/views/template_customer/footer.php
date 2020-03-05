  <!-- Footer -->
  <footer class="py-5" style="background-color: #0F0E20; bottom: 0px; width: 100%; left: 0px; right: 0px; margin-bottom: 0px; height: 50px;">
      <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy;<a href="<?= base_url('customer/dashboard')?>" style="text-decoration: none"> Rentcar.com</a> 2020</p>
      </div>
      <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->

  <!-- DateTimePicker -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <!-- END DateTimePicker -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

  <script>
$('.picker').datetimepicker({
    timepicker: true,
    datepicker: true,
    format: 'Y-m-d H:i', // formatDate
    hours12: false,
    minDate: 0,
    step: 30
});

function disable()
{
 document.onkeydown = function (e) 
 {
  return false;
 }
}
  </script>

  <script>
$(document).ready(function() {
    $('#data_table').DataTable();
});
  </script>

  </body>

  </html>