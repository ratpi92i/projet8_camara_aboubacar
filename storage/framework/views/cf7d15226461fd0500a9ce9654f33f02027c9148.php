<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LISTE-ETUDIANTS</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/lib/bootstrap/css/bootstrap.css')); ?>">
</head>

<body>


    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1> CRUD AVEC LARAVEL 10</h1>
                <a href="/ajouter" class="btn btn-primary">ajouter un etudiant</a>
                <?php if(session('status')): ?>
                        <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                        </div>
                <?php endif; ?>


                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NOM</th>
                            <th scope="col">PRENOM</th>
                            <th scope="col">CLASSE</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            $ide=1;
                        ?>

                        <?php $__currentLoopData = $etudiants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etudiant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td> <?php echo e($ide); ?> </td>
                                <td> <?php echo e($etudiant->nom); ?> </td>
                                <td> <?php echo e($etudiant->prenom); ?> </td>
                                <td> <?php echo e($etudiant->classe); ?> </td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="/modifier-etudiant/<?php echo e($etudiant->id); ?>" >Modifier </a>
                                   <a  class="btn btn-sm btn-danger" href="/supprimer-etudiant/<?php echo e($etudiant->id); ?>">Supprimer</a>

                                </td>
                            </tr>

                            <?php
                            $ide += 1;
                        ?>

                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                </table>
                <?php echo e($etudiants->links()); ?>


            </div>
        </div>
    </div>

    <script src="<?php echo e(asset('assets/lib/bootstrap/js/bootstrap.min.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\essai\resources\views/etudiant/liste.blade.php ENDPATH**/ ?>