/********************************************************
 * DO NOT CHANGE THIS FILE, IT IS GENERATED AUTOMATICALY*
 ********************************************************/

/*****************************************************************************
 * add your copyright notice
 * Copyright <year>, <your name>
 *
 * Please do not change the license on a single file, if you want to change it
 * discuss it with the development team.
 *
 * PLEASE REMOVE THIS COMMENT
 *****************************************************************************/

/* Copyright 2008, 2009, Mariano Cerdeiro
 *
 * This file is part of FreeOSEK.
 *
 * FreeOSEK is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Linking FreeOSEK statically or dynamically with other modules is making a
 * combined work based on FreeOSEK. Thus, the terms and conditions of the GNU
 * General Public License cover the whole combination.
 *
 * In addition, as a special exception, the copyright holders of FreeOSEK give
 * you permission to combine FreeOSEK program with free software programs or
 * libraries that are released under the GNU LGPL and with independent modules
 * that communicate with FreeOSEK solely through the FreeOSEK defined interface.
 * You may copy and distribute such a system following the terms of the GNU GPL
 * for FreeOSEK and the licenses of the other code concerned, provided that you
 * include the source code of that other code when and as the GNU GPL requires
 * distribution of source code.
 *
 * Note that people who make modified versions of FreeOSEK are not obligated to
 * grant this special exception for their modified versions; it is their choice
 * whether to do so. The GNU General Public License gives permission to release
 * a modified version without this exception; this exception also makes it
 * possible to release a modified version which carries forward this exception.
 *
 * FreeOSEK is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with FreeOSEK. If not, see <http://www.gnu.org/licenses/>.
 *
 */

#ifndef _OS_INTERNAL_ARCH_CFG_H_
#define _OS_INTERNAL_ARCH_CFG_H_

/*****************************************************************************
 * update the tmparch directory on the \file doxygen comment with your
 * architecture
 *
 * PLEASE REMOVE THIS COMMENT
 *****************************************************************************/
/** \brief FreeOSEK Os Generated Internal Architecture Configuration Header File
 **
 ** This file content the internal generated architecture dependent
 ** configuration of FreeOSEK.
 **
 ** \file tmparch/Os_Internal_Arch_Cfg.h
 ** \arch tmparch
 **/

/** \addtogroup FreeOSEK
 ** @{ */
/** \addtogroup FreeOSEK_Os
 ** @{ */
/** \addtogroup FreeOSEK_Os_Internal
 ** @{ */

/*****************************************************************************
 * add your name to the developers and create for you a nick with
 * 3 or 4 letters. Please do not use any given nick.
 *
 * PLEASE REMOVE THIS COMMENT
 *****************************************************************************/
/*
 * Initials     Name
 * ---------------------------
 * MaCe			 Mariano Cerdeiro
 */

/*****************************************************************************
 * add a new version to this file, add the date, your initials and the main
 * changes, only main changes shall be listed here. A detailed message log
 * is saved in svn log and on the tracker system since every svn login message
 * shalle indicate the related tracker id.
 *
 * PLEASE REMOVE THIS COMMENT
 *****************************************************************************/
/*
 * modification history (new versions first)
 * -----------------------------------------------------------
 * v0.1.0 20090526 MaCe	FreeOSEK architecture template file
 */

/*==================[inclusions]=============================================*/
/*****************************************************************************
 * Please define here all needed macros of your configuration that can
 * be configured or are used in Osek_Internal_Arch_Cfg.c.php
 *
 * PLEASE REMOVE THIS COMMENT
 *****************************************************************************/

/*==================[typedef]================================================*/
/*****************************************************************************
 * Please define here all needed types to be configured or used in
 * Osek_Internal_Arch_Cfg.c.php
 *
 * PLEASE REMOVE THIS COMMENT
 *****************************************************************************/

/** \brief Task Context Type */
typedef struct {
/* offset 0: Hardware stacked integer registers */
	 uint32 reg_r0;
	 uint32 reg_r1;
	 uint32 reg_r2;
	 uint32 reg_r3;
	 uint32 reg_r12;
	 uint32 reg_lr;
	 uint32 reg_pc;
	 uint32 reg_xpsr;
/* offset 32: Hardware stacked floating point registers (if FPU used)
 * or software stacked integer registers (if FPU not used) */
	 uint32 reg_s0_r4;
	 uint32 reg_s1_r5;
	 uint32 reg_s2_r6;
	 uint32 reg_s3_r7;
	 uint32 reg_s4_r8;
	 uint32 reg_s5_r9;
	 uint32 reg_s6_r10;
	 uint32 reg_s7_r11;
	 uint32 reg_s8_r14;
	 uint32 reg_s9;
	 uint32 reg_s10;
	 uint32 reg_s11;
	 uint32 reg_s12;
	 uint32 reg_s13;
	 uint32 reg_s14;
	 uint32 reg_s15;
	 uint32 reg_fpscr;
/* offset 100: OS stacked floating point registers (if FPU used) */
	 uint32 reg_s16;
	 uint32 reg_s17;
	 uint32 reg_s18;
	 uint32 reg_s19;
	 uint32 reg_s20;
	 uint32 reg_s21;
	 uint32 reg_s22;
	 uint32 reg_s23;
	 uint32 reg_s24;
	 uint32 reg_s25;
	 uint32 reg_s26;
	 uint32 reg_s27;
	 uint32 reg_s28;
	 uint32 reg_s29;
	 uint32 reg_s30;
	 uint32 reg_s31;
/* offset 164: OS stacked integer registers (if FPU used) */
	 uint32 reg_r4;
	 uint32 reg_r5;
	 uint32 reg_r6;
	 uint32 reg_r7;
	 uint32 reg_r8;
	 uint32 reg_r9;
	 uint32 reg_r10;
	 uint32 reg_r11;
	 uint32 reg_r14;
} TaskContextType;

/** \brief Task Context Type */
typedef TaskContextType* TaskContextRefType;

/*==================[external data declaration]==============================*/
/*****************************************************************************
 * Please declare here all exported data defined
 * Osek_Internal_Arch_Cfg.c.php
 *
 * PLEASE REMOVE THIS COMMENT
 *****************************************************************************/

/*==================[external functions declaration]=========================*/
/*****************************************************************************
 * Please declare here all exported functions defined
 * Osek_Internal_Arch_Cfg.c.php
 *
 * PLEASE REMOVE THIS COMMENT
 *****************************************************************************/

/** @} doxygen end group definition */
/** @} doxygen end group definition */
/** @} doxygen end group definition */
/*==================[end of file]============================================*/
#endif /* #ifndef _OS_INTERNAL_ARCH_CFG_H_ */

