test projects --> Upload_Files

To Upload FIles Create  a From Then Make Post Route Then Inside The Function 

return $req->file('image')->store('profileimg',);

file('image')  ---> is Used To Get File From the From 

store('froldername')--> folder name name inside the file should be stored will be menstioned here 

To Store File With Specific name of image 


return $req->file('image')->storeAs('profileimg','imagename.jpg');



To Get Extenstion

  $req->file('image')->guessExtension();

   //Return jpg , jpeg


  To get MimeType


  // Methods are 


  getMimeType()

  store()

  asStore()

  storePublicly()

  move() --> $req->image->move(public_path('images'),$newImageName);

  getClientOrignalName()  --> Return the Orignal Name of Image 

  getClientMimeType()  ->

  guessClientExtenstion

  getSize()  --> To Get Size in KilloByte (KB)

  getError()  --> Its 1 for Error  Or 0 For Successfully 

  isValid()  --> return true Or False





