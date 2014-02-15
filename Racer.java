import java.io.File;

public class Racer
   extends Thread
{
   //got help for multi threads from http://stackoverflow.com/questions/2081747/
   //how-to-deal-with-multiple-threads-in-one-class
   private int mFileNumber;
//   public final Runnable Creator;
//   public final Runnable Destroyer;
   
   public Racer()
   {
      mFileNumber = 0;
   }
 
   public File newFileN(int number)
   {
      return new File(String.format("file.%05d", number));
   }
   
   public void start(String[] args)
   {
      /* if (args[0] == "Creator")
      {
         new Thread(x.Creator).start(args);

      }
      else if (args[0] == "CreatorDestroyer")
      {
         new Thread(x.Destroyer).start(args);

         }*/

      while (true)
      {
         try
         {
            if (args[0] == "Creator")
            {
               if (newFileN(mFileNumber).createNewFile())
               {
                  mFileNumber++;
               }
            }
            else if (args[0] == "Destroyer")
            {
               if (newFileN(mFileNumber).delete())
                {
                    mFileNumber++;
                }
            }
            Thread.sleep(500);
         }
         catch (Exception e)
         {
         }
      }
   }
   
   public static void main(String[] args)
   {
      new Racer().start(args);
   }
}
