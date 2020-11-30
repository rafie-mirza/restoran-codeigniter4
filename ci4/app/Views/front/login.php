<?= $this->extend('template/front') ?>

<?= $this->section('content') ?>

<div class="container">

  <div class="cont">
    <div class="form sign-in">
      <form method="post" action="<?= base_url('authlogin') ?>">
        <h2>Login</h2>
        <?php if (session()->getFlashdata('message') != null) : ?>

          <div class="alert alert-success text-center" role="alert"><?= session()->getFlashdata('message') ?></div>

        <?php endif ?>
        <?php if (session()->getFlashdata('error') != null) : ?>

          <div class="alert alert-danger text-center" role="alert"><?= session()->getFlashdata('error') ?></div>

        <?php endif ?>
        <label class="label">

          <input type="email" class="input" name="email" required placeholder="Email" />
        </label>
        <label class="label">

          <input type="password" class="input" name="password" required placeholder="Password" />
        </label>
        <button type="submit" name="login" class="submit button1">Sign In</button>

      </form>

    </div>
    <div class="sub-cont">
      <div class="img">
        <div class="img__text m--up text-white">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img__text m--in ">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img__btn">
          <span class="m--up">Sign Up</span>
          <span class="m--in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up ">
        <form method="post" action="<?= base_url('authregister') ?>">
          <h2>Create account</h2>
          <?php if (session()->getFlashdata('info') != null) : ?>

            <div class="alert alert-danger text-center" role="alert"><?= session()->getFlashdata('info') ?></div>

          <?php endif ?>
          <label class="label">
            <input type="text" class="input" name="pelanggan" required placeholder="Nama" />
          </label>
          <label class="label">
            <input type="text" class="input" name="alamat" required placeholder="Alamat" />
          </label>
          <label class="label">
            <input type="tel" class="input" name="telp" required placeholder="No Telp" />
          </label>
          <label class="label">
            <input type="email" class="input" name="email" required placeholder="Email" />
          </label>
          <label class="label">
            <input type="password" class="input" name="password" required placeholder="Password" />
          </label>
          <button name="register" type="submit" class="submit button1">Sign Up</button>
        </form>

      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>