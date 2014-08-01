/*
 * Copyright 2012 The Android Open Source Project
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

package com.innovatelogic.effectivenavigation;

import java.lang.reflect.InvocationTargetException;
import java.lang.reflect.Method;

import android.os.Build;
import android.os.Bundle;
import org.apache.cordova.*;

import android.support.v4.view.ViewPager;


public class MainActivity extends DroidGap 
{
    /**
     * The {@link ViewPager} that will display the three primary sections of the app, one at a
     * time.
     */
    public void onCreate(Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
            	
        super.loadUrl("file:///android_asset/www/index.html");

        if (Build.VERSION.SDK_INT >= 16) {  
            Class<?> clazz = super.appView.getSettings().getClass();
            Method method = null;
			try {
				method = clazz.getMethod("setAllowUniversalAccessFromFileURLs", boolean.class);
			} catch (NoSuchMethodException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
            if (method != null) {
                try {
					method.invoke(super.appView.getSettings(), true);
				} catch (IllegalAccessException e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
				} catch (IllegalArgumentException e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
				} catch (InvocationTargetException e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
				}
            }
        }
        
      /*if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.JELLY_BEAN_MR1)
    	{
    		 try{
    	          super.appView.getSettings().setAllowUniversalAccessFromFileURLs(true);
    	        }
    		 	catch(NullPointerException e) {
    	           System.out.println(e.toString());
    	        }
        }*/
    }
}
