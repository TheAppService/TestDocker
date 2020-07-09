package de.openshift.test;

import org.apache.commons.lang3.SystemUtils;

public class OpenShiftTet {

    public static void main(String[] args){

        System.out.println("Hello World form Java!");
        System.out.println("Teting if Maven dependency was loaded proberly:");
        System.out.println("Output from APACHE COMMONS, this System is running Java Version: "+ SystemUtils.JAVA_VERSION );
    }
}
