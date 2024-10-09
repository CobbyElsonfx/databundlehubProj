</div><!-- end row -->
</div><!-- end container -->
</section>

<?php
use App\classes\Site;

$ob = Site::displaySocialLink();
$data = mysqli_fetch_assoc($ob);
?>


<div class="dmtop">Scroll to Top</div>

<!-- Core JavaScript
================================================== -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/tether.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>

<!-- datatables -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>

<script>
    function formatDate(dateString) {
        var date = new Date(dateString);
        var day = String(date.getDate()).padStart(2, '0');
        var month = String(date.getMonth() + 1).padStart(2, '0'); // Months are zero-based
        var year = date.getFullYear();
        var hours = String(date.getHours()).padStart(2, '0');
        var minutes = String(date.getMinutes()).padStart(2, '0');
        var seconds = String(date.getSeconds()).padStart(2, '0');
        
        return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
    }
    // Fetch data from Google Sheets and populate DataTable
    const scriptURL = '<?= $api['url'] ?>';
 $(document).ready(function() {
    // Fetch data from Google Sheets and populate DataTable
    $.ajax({
        url: scriptURL,
        type: 'GET',
        success: function(data) {
            // Format data for DataTables
            var dataTableData = data.map(function(row) {
                return {
                    'date': formatDate(row[0]),
                    'reference': row[3],
                    'package': row[9],
                    'submission': row[11],
                    'payment': row[12],
                    'delivered': row[14],
                 
                };
            });

            // Initialize DataTable
            $('#ordersTable').DataTable({
                data: dataTableData,
                responsive: true,
                columns: [
                    { title: 'Date', data: 'date' },
                    { title: 'Order ID', data: 'reference' },
                    { title: 'Package', data: 'package' },
                    {title: 'Submission', data: 'submission'},
                    {title:'Payment', data:'payment'},
                    {title:'Delivered', data:'delivered'}
                ]
            });
        },
        error: function(xhr, status, error) {
            console.error('Error fetching data:', error);
        }
    });
});


 
</script>

     


</body>

</html>