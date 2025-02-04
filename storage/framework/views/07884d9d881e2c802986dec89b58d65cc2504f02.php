

<?php $__env->startSection('Dashboard'); ?>
<span class="display-zero"><?php echo e($Locale = LaravelLocalization::getCurrentLocale()); ?></span>
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Réservations</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nom d'utilisateur</th>
                            <th>Adresse E-mail</th>
                            <th>Téléphone</th>
                            <th>Message</th>
                            <th>Date de début</th>
                            <th>Date de fin</th>
                            <th>Espace de travail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($reservation->name); ?></td>
                            <td><?php echo e($reservation->mail); ?></td>
                            <td><?php echo e($reservation->phone); ?></td>
                            <td><?php echo e(Str::limit($reservation->Message, 50)); ?></td>
                            <td><?php echo e(\Carbon\Carbon::parse($reservation->datestart)->format('d/m/Y')); ?></td>
                            <td><?php echo e(\Carbon\Carbon::parse($reservation->dateend)->format('d/m/Y')); ?></td>
                            <td><?php echo e($reservation->space->{'Title_'.$Locale}); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <?php echo e($reservations->links()); ?>

            </div>
        </div>
    </div>
</div>

<style>
.card {
    border-radius: 10px;
}
.table th {
    background-color: #f8f9fa;
    font-weight: 600;
}
.pagination {
    margin-bottom: 0;
}
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Dashboard.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\syxtema-sbc\resources\views/Dashboard/Reservations/index.blade.php ENDPATH**/ ?>