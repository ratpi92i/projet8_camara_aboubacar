<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AJOUT-ETUDIANTS</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/lib/bootstrap/css/bootstrap.css')); ?>">
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col s12">
                <h2 class="mb-4">Ajouter un etudiant</h2>

                        <?php if(session('status')): ?>
                        <div class="alert alert-success">
                         <?php echo e(session('status')); ?>

                        </div>
                        <?php endif; ?>


                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="alert alert-danger"> <?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
             <form method="post" action="/ajouter/traitement" >
                <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" >
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="" name="prenom" >
                    </div>
                    <div class="mb-3">
                        <label for="classe" class="form-label">Classe</label>
                        <input type="text" class="form-control" id="" name="classe" >
                    </div>

                    <button type="submit" class="btn btn-primary">Ajouter un etudiant</button>
                </form> <br>
                        <a href="/etudiant" class="btn btn-success">liste des etudiants</a>

            </div>
        </div>
    </div>

    <script src="<?php echo e(asset('assets/lib/bootstrap/js/bootstrap.min.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\essai\resources\views/etudiant/ajouter.blade.php ENDPATH**/ ?>