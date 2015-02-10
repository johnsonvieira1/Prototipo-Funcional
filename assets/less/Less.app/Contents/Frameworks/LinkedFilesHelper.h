//
//  LinkedFilesHelper.h
//  LessClient
//
//  Created by Bryan Jones on 23 Sep 2010.
//  Copyright (c) 2010 Bryan D K Jones. All rights reserved.
//

#import <Cocoa/Cocoa.h>


@interface LinkedFilesHelper : NSObject 
{
}


/* ------------------------------------------------------------------------------------------------------------------ 
 Returns an array of all @import paths in 'inputFile'. It trims the strings to just the file path.
 Example: '@import "../some/file.less";' becomes: '../some/file.less' in the array.
 
 NOTE: If 'inputFile' has no @import statements, this function returns an empty NSArray. 
 NOTE: If the process fails for any reason (e.g. memory allocation), returns nil.
 ------------------------------------------------------------------------------------------------------------------ */

+ (NSArray *) linkedFilesForLessFile:(NSString *)inputFile;




/* ------------------------------------------------------------------------------------------------------------------ 
 Convenience method to resolve relative file links and return a full path to the imported file. 
 
 Example: pass 'importedFile':  ../../someLessFile.less
		  pass 'baseFile':	    /users/john/documents/clients/apple/stylesheets/less/framework/common/main.less
 
		  RETURNS:				/users/john/documents/clients/apple/stylesheets/less/someLessFile.less
 
 NOTE: This method does NOT check to see if the path is valid or the file exists!
 NOTE: Obviously, you need to pass a root-relative base file path. No Tilde paths!
 -------------------------------------------------------------------------------------------------------------------- */

+ (NSString *) pathToImportedFile:(NSString *)importedFile relativeToLessFile:(NSString *)fullPathToBaseFile;



@end
