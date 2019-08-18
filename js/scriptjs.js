function hasClassName(inElement, inClassName)
    {
        var regExp = new RegExp('(?:^|\\s+)' + inClassName + '(?:\\s+|$)');
        return regExp.test(inElement.className);
    }

    function addClassName(inElement, inClassName)
    {
        if (!hasClassName(inElement, inClassName))
            inElement.className = [inElement.className, inClassName].join(' ');
    }

    function removeClassName(inElement, inClassName)
    {
        if (hasClassName(inElement, inClassName)) {
            var regExp = new RegExp('(?:^|\\s+)' + inClassName + '(?:\\s+|$)', 'g');
            var curClasses = inElement.className;
            inElement.className = curClasses.replace(regExp, ' ');
        }
    }

    function toggleClassName(inElement, inClassName)
    {
        if (hasClassName(inElement, inClassName))
            removeClassName(inElement, inClassName);
        else
            addClassName(inElement, inClassName);
    }

    function toggleShape()
    {
      var shape = document.getElementById('shape');
      if (hasClassName(shape, 'ring')) {
        removeClassName(shape, 'ring');
        addClassName(shape, 'cube');
      } else {
        removeClassName(shape, 'cube');
        addClassName(shape, 'ring');
      }
      
      var stage = document.getElementById('stage');
      if (hasClassName(shape, 'ring'))
        stage.style.webkitTransform = 'translateZ(-200px)';
      else
        stage.style.webkitTransform = '';
    }

    function toggleSlide(){
        if($('#sence1').hasClass('d-block')) {
            $('#sence1').removeClass('d-block');
            $('#sence1').addClass('d-none');
            $('#sence2').removeClass('d-none');
            $('#sence2').addClass('d-block');
            return false;
        }
        if($('#sence2').hasClass('d-block')) {
            $('#sence2').removeClass('d-block');
            $('#sence2').addClass('d-none');
            $('#sence3').removeClass('d-none');
            $('#sence3').addClass('d-block');
            return false;
        }
        if($('#sence3').hasClass('d-block')) {
            $('#sence3').removeClass('d-block');
            $('#sence3').addClass('d-none');
            $('#sence1').removeClass('d-none');
            $('#sence1').addClass('d-block');
            return false;
        }   
    }
