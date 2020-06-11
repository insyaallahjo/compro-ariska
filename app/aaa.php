<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="./">Ariska CMS Panel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php if (session()->get('isLoggedIn')) : ?>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>">
              <a class="nav-link" href="<?= base_url('ariska-panel/public'); ?>/dashboard">Dashboard</a>
            </li>
            <li class="nav-item <?= ($uri->getSegment(1) == 'profile' ? 'active' : null) ?>">
              <a class="nav-link" href="<?= base_url('ariska-panel/public'); ?>/profile">Update Profile</a>
            </li>
            <li class="nav-item <?= ($uri->getSegment(1) == 'career' ? 'active' : null) ?>">
              <a class="nav-link" href="<?= base_url('ariska-panel/public'); ?>/career">Career</a>
            </li>
          </ul>
          <ul class="navbar-nav my-2 my-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="./logout">Logout</a>
            </li>
          </ul>
        <?php else : ?>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?= ($uri->getSegment(1) == '' ? 'active' : null) ?>">
              <!-- <a class="nav-link" href="/">Login</a> -->
            </li>
            <li class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
              <!-- <a class="nav-link" href="/register">Register</a> -->
            </li>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </nav>


  <div class="container">
    <div class="row">
        <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="container">

                <h4>Form Karir</h4>
                <a href="./career/insertCareerForm">+ Add</a>
                <hr>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Position</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($careers) : ?>
                            <?php $i = 1; ?>
                            <?php foreach ($careers as $career) : ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td><?= $career['title'] ?></td>
                                    <td>
                                        <a href="./career/edit/<?= $career['id'] ?>">Edit</a> |
                                        <a href="./career/delete/<?= $career['id'] ?>">Delete</a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>