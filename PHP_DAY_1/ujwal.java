
import java.util.Arrays;

import java.util.Scanner;



public class ujwal {



	private static Object toString;



	public static void main(String[] args) {



	// TODO Auto-generated method stub



	Scanner sc=new Scanner(System.in);// to be able to read







	System.out.println("Enter count of records=");



	int count=sc.nextInt();







	double[] arrMarks=new double[count];



	String[] arrNames=new String[count];







	for(int i=0;i<count;i++){



	System.out.println("Enter Student Name = ");



	arrNames[i]=sc.next();







	System.out.println("Enter Student Marks = ");



	arrMarks[i]=sc.nextDouble();



	}















	System.out.println("find Student Name and marks in array is exist or not ?= ");



	String  val=sc.next();







	if(checkStudent(arrNames,val) != -1){



	System.out.println("Mark of existing student = "+ arrMarks[checkStudent(arrNames,val) ]);



	}else{



	System.out.println("User not found");// of exist



	}







	System.out.println("Sum of Marks = "+ getSumofMarks(arrMarks));



	System.out.println("Average of Marks = "+ getAvgofMarks(arrMarks));



	System.out.println("Max of Marks and Name = "+ getMaxName(arrMarks,arrNames));//+"\n Name = "+ );



	System.out.println("Number of students marks higher than avg = "+ getCount(arrMarks));







	System.out.println("Nearest Average = "+ arrNames[nearMarkIndex(arrMarks)]);






	System.out.println("Sorting => ");
    int newar[] = sortMarks(arrMarks);
    for(int i=0;i<arrMarks.length;i++)
    {
        System.out.println(arrNames[newar[i]] +": "+arrMarks[newar[i]]);
    }



	}







	
	
	private static String isExist(String val, double[] arrMarks, String[] arrNames) {



	// TODO Auto-generated method stub



	String mark="0";



	for(int i=0;i<arrNames.length;i++){



	if(val.equalsIgnoreCase(arrNames[i])){



	// mark=arrMarks[i]+"";



	// if(mark.equalsIgnoreCase("0.0")){



	//



	// }else{



	mark= arrMarks[i]+" , "+mark;



	// }







	}



	}



	return mark+"";







	}















	private static int getCount(double[] arrMarks) {



	// TODO Auto-generated method stub



	int count=0;



	for(int i=0;i<arrMarks.length;i++){



	if(getAvgofMarks(arrMarks)>arrMarks[i]){



	count=count+1;







	}



	}



	return count;



	}







	private static String getMaxName(double[] arrMarks, String[] arrNames) {



	// TODO Auto-generated method stub



	double max=0, sum=0;



	String name="";







	for(int i=0;i<arrMarks.length;i++){







	for(int j=0;j<arrMarks.length;j++){



	if(arrMarks[i]<arrMarks[j]){



	max=arrMarks[j];



	name=arrNames[j];







	//break;



	}



	}



	}







	return max+" "+name;



	}







	private static String getMaxName(double[] arrMarks) {



	// TODO Auto-generated method stub



	return null;



	}







	private static double getAvgofMarks(double[] arrMarks) {



	// TODO Auto-generated method stub



	double avg=0;



	for(int i=0;i<arrMarks.length;i++){



	avg=avg+arrMarks[i];



	}



	avg=avg/arrMarks.length;



	return avg;







	}







	private static double  getSumofMarks(double[] arrMarks) {



	// TODO Auto-generated method stub



	double sum=0;



	for(int i=0;i<arrMarks.length;i++){



	sum=sum+arrMarks[i];



	}



	return sum;



	}



    public static double average(double array[])
    {
        double sum = 0;
        for(int i=0;i<array.length;i++)
        {
            sum += array[i];
        }   
        return sum/array.length;
    }
    public static int nearMarkIndex(double array[])
    {
        double min = Math.abs(average(array)- array[0]);
        int index = 0;
        for(int i=0;i<array.length;i++)
        {
            if(min>Math.abs(average(array)- array[i]))
            {
                index = i;
                min = Math.abs(average(array)- array[i]);
            }
        }
        return index;
    }
    public static int checkStudent(String array[], String studentName)
    {
        for(int i=0;i<array.length;i++)
        {
            if(array[i].equals(studentName))
            {
                return i;
            }
        }
        return -1;
    }

    /*public static String[] sortNames(String[] names)
    {
        for(int i=0;i<names.length;i++)
        {
            for(int j=0;j<names.length-1-i;j++)
            {
                if(names[j].compareTo(names[j+1])<0)
                {
                    String name = names[j];
                    names[j] = names[j+1];
                    names[j+1] = name;
                }
            }
        }
        return names;
    }*/
    public static int[] sortMarks(double[] marks)
    {
        int index[] = new int[marks.length];
        for(int i=0;i<marks.length;i++)
        {
            index[i] = i;
        }
        for(int i=0;i<marks.length;i++)
        {
            for(int j=0;j<marks.length-1-i;j++)
            {
                if(marks[j]>(marks[j+1]))
                {
                    /*double name = marks[j];
                    marks[j] = marks[j+1];
                    marks[j+1] = name;*/
                    int name = j;
                    index[j] = j+1;
                    index[j+1] = name;
                }
            }
        }
        return index;
    }





	



}