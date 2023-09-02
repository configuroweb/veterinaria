<div class="col-12">
    <div class="row my-5 ">
        <div class="col-md-5">
            <div class="card card-outline card-navy rounded-0 shadow">
                <div class="card-header">
                    <h4 class="card-title">Contáctanos</h4>
                </div>
                <div class="card-body rounded-0">
                    <dl>
                        <dt class="text-muted"><i class="fa fa-envelope"></i> Correo</dt>
                        <dd class="pl-4"><?= $_settings->info('email') ?></dd>
                        <dt class="text-muted"><i class="fa fa-phone"></i> N Contacto</dt>
                        <dd class="pl-4"><?= $_settings->info('contact') ?></dd>
                        <dt class="text-muted"><i class="fa fa-map-marked-alt"></i> Ubicación</dt>
                        <dd class="pl-4"><?= $_settings->info('address') ?></dd>
                        <dt class="text-muted"><i class="fa fa-clock"></i> Horario</dt>
                        <dd class="pl-4"><?= $_settings->info('clinic_schedule') ?></dd>
                        <dt class="text-muted"><i class="fa fa-paw"></i> Citas diarias por día</dt>
                        <dd class="pl-4"><?= $_settings->info('max_appointment') ?></dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card rounded-0 card-outline card-navy shadow">
                <div class="card-body rounded-0">
                    <h2 class="text-center">Acerca de</h2>
                    <center>
                        <hr class="bg-navy border-navy w-25 border-2">
                    </center>
                    <div>
                        <?= file_get_contents("about_us.html") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>