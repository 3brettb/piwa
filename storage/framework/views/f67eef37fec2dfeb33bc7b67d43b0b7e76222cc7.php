<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="index.html"><i class="icon-speedometer"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.html"><i class="icon-organization"></i> Project Index</a>
            </li>

            
            
            <li class="divider"></li>
            <li class="nav-title">
                Projects
            </li>
            <?php if(Auth::user()->projects->count() > 0): ?>
                <?php $__currentLoopData = Auth::user()->projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <li class="nav-item">
                        <a class="nav-link" href='<?php echo e(url("/project/$project->id")); ?>'><i class="icon-doc"></i> <?php echo e($project->name); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <li class="nav-text nav-indent">
                    You Have No Projects
                </li>
            <?php endif; ?>

            

        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>