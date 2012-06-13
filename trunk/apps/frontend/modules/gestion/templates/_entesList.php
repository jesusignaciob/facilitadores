<select id="entesSecciones">
          <option value=""></option>
          <?php foreach($entes as $ef): ?>
          <option value="<?php echo $ef->getId(); ?>"><?php echo $ef->getNombreEnte(); ?></option>
          <?php endforeach; ?>
        </select>
