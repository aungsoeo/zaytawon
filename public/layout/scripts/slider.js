
CurrentImage = 0;
ImageCount = ImageArray.length;
function RotateBanner()
{
  if(document.images)
  {
    CurrentImage++;
    if(CurrentImage==ImageCount)
    {
      CurrentImage=0;
    }
    document.Banner.src=ImageArray[CurrentImage];
    setTimeout("RotateBanner()",3000)
  }
}
