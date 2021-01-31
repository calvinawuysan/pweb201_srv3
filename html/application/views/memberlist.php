<div class="container">
<h3> <?= $judul ?> </h3>
<hr>
<div class="row">
  <div class="col s2">
    <h5>Negara</h5>
    <ul>
      <li><a href="/members/ID">Indonesia</a></li>
      <li><a href="/members/AT">Austria</a></li>
      <li><a href="/members/GB">United Kingdom</a></li>
      <li><a href="/members/US">United States</a></li>
      <li><a href="/members/AR">Argentina</a></li>
      <li><a href="/members/SE">Sweden</a></li>
      <li><a href="/members/CA">Canada</a></li>
      <li><a href="/members/MX">Mexico</a></li>
      <li><a href="/members/PL">Poland</a></li>
      <li><a href="/members/DE">Germany</a></li>
      <li><a href="/members/DK">Denmark</a></li>
      <li><a href="/members/BE">Belgium</a></li>
      <li><a href="/members/PT">Portugal</a></li>
      <li><a href="/members/CH">Switerland</a></li>
      <li><a href="/members/BR">Brazil</a></li>
      <li><a href="/members/FR">France</a></li>
      <li><a href="/members/ES">Spain</a></li>
      <li><a href="/members/VE">Venezuela</a></li>
      <li><a href="/members/NO">Norway</a></li>
      <li><a href="/members/IE">Ireland</a></li>
      <li><a href="/members/IT">Italy</a></li>
      <li><a href="/members/FI">Finland</a></li>
    </ul>
  </div>
  <div class="col s10">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Negara</th>
          <th>Kota</th>
          <th>Alamat</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($members as $member): ?>
        <tr>
          <td> <?= $member['member_ID'] ?></td>
          <td> <?= $member['nama'] ?></td>
          <td> <?= $member['Country'] ?></td>
          <td> <?= $member['kota'] ?></td>
          <td> <?= $member['alamat'] ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
</div>
